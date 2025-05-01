<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengajuan;
use App\Services\Midtrans\CreateSnapTokenService;
use App\Services\Midtrans\CreateTokenOngkirService;
use Carbon\Carbon;
use App\Models\SubPengajuan;
use App\Models\User;
use App\Models\Countries;
use App\Mail\PengajuanMail;
use App\Mail\ContactMail;
use PDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Tanaman;
use Illuminate\Support\Facades\Http;


class UserController extends Controller
{
    public function makePengajuan(Request $request)
    {
        return view('pengajuan.create');
    }
    public function pengajuanPost(Request $request)

    {
        $array_bln	= array(1=>"I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        // dd($request->all());
        $data = Pengajuan::insertGetId([
            'user_id' => Auth::user()->id,

            // 'tanaman_id'=>$request->plants,
            // 'varietas'=>$request->varietas,
            'date'=>Carbon::now()->format('Y-m-d'),
            'negara_tujuan'=>$request->country,
            'nama_penerima'=>$request->nama_penerima,
            'alamat_penerima'=>$request->alamat_penerima,
            'email_penerima'=>$request->email_penerima,
            'notelp_penerima'=>$request->notelp_penerima,
        ]);

        Pengajuan::where('id',$data)->update([
            'pengajuan_id'=> $data.'/PA/SPn/P2/'.$array_bln[date('n')].'/'.date('Y'),


        ]);



        for ($i=0; $i < count($request->plants); $i++) {
            SubPengajuan::create([
                'pengajuan_id'=>$data,
                'user_id'=>Auth::user()->id,
                'tanaman_id'=>$request->plants[$i],
                'varietas'=>$request->varietas[$i],
                'jumlah'=>$request->jumlah[$i]
            ]);

        }

        // Mail::to(env('MAIL_ADMIN'))->send(new PengajuanMail($data));

        DB::table('notifications')->insert([
            'title'=>'New Request Has Been Created',
            'message'=>'New Request Has Been Created , with ID = '.$data.'/PA/SPm/P1/'.$array_bln[date('n')].'/'.date('Y'),
            'for'=>0
        ]);
        return redirect()->back()->with(['message'=>'Submission Successful','status'=>'success']);
    }

    public function historyPengajuan(Request $request)
    {
        $done = Pengajuan::where('user_id',Auth::id())->where('status',8)->get();
        $progress = Pengajuan::where('user_id',Auth::id())->where('status','!=',8)->where('status','!=',-1)->get();
        $decline = Pengajuan::where('user_id',Auth::id())->where('status',-1)->get();
        return view('pengajuan.history',['done'=>$done,'progress'=>$progress,'decline'=>$decline]);
    }

    public function requestTanaman(Request $request)
    {
        return view('requestTanaman.create');
    }


    public function requestTanamanPost(Request $request)
    {
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $thumbname = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path() . '/tanamanRequest' . '/', $thumbname);


            Tanaman::where('id', $id)->update([
                'nama' => $request->nama,
                'name_latin' => $request->name_latin,
                'gambar' => $thumbname,
            ]);
        }else {

        Tanaman::where('id', $id)->update([
            'nama' => $request->nama,
            'name_latin' => $request->name_latin,

        ]);
        }

        return redirect()->back()->with(['message'=>'Successfully sent a new plant request','status'=>'success']);
    }

    public function pay($id)
    {
        $pengajuan = Pengajuan::find($id);


        $snapToken = $pengajuan->snap_token;
        if (empty($snapToken)) {
            // Jika snap token masih NULL, buat token snap dan simpan ke database

            $midtrans = new CreateSnapTokenService($pengajuan);
            $snapToken = $midtrans->getSnapToken();
            $pengajuan->snap_token = $snapToken;
            $pengajuan->save();
        }

        return view('pengajuan.pay',['pengajuan'=>$pengajuan,'snapToken'=>$snapToken]);
    }


    public function detailRequest($id)
    {

        $pengajuan = Pengajuan::find($id);
        $pay = FALSE;

        $snapToken = $pengajuan->snap_token;
        if ($pengajuan->status >= 4) {
            $pay = TRUE;
            if (empty($snapToken)) {
                // Jika snap token masih NULL, buat token snap dan simpan ke database

                $midtrans = new CreateSnapTokenService($pengajuan);
                $snapToken = $midtrans->getSnapToken();
                $pengajuan->snap_token = $snapToken;
                $pengajuan->save();
            }
            if (!is_null($pengajuan->ongkir) && !is_null($pengajuan->biaya_karantina)) {

                if (empty($pengajuan->snap_token_tambahan)) {

                    $midtrans = new CreateTokenOngkirService($pengajuan);
                    $snap_token_tambahan = $midtrans->getSnapToken();
                    $pengajuan->snap_token_tambahan = $snap_token_tambahan;
                    $pengajuan->save();
                }
                return view('pengajuan.detail',['pengajuan'=>$pengajuan,'snapToken'=>$snapToken,'pay'=>$pay,'snapTokenOngkir'=>$pengajuan->snap_token_tambahan,'payOngkir'=>TRUE]);

            }else {

            return view('pengajuan.detail',['pengajuan'=>$pengajuan,'snapToken'=>$snapToken,'pay'=>$pay]);
            }
        }
        else {
            $pengajuan = Pengajuan::find($id);
            return view('pengajuan.detail',['pengajuan'=>$pengajuan,'pay'=>$pay]);
        }

    }



    public function bayar_ongkir(Request $request)
    {
        Pengajuan::where('id',$request->pengajuan)->update([
            'status_ongkir'=>$request->result['status_message']
        ]);

        return response()->json(['message'=>'Update Transaction','status'=>'success'], 200);
    }

    public function cst(Request $request)
    {

        try {
            Pengajuan::where('id',$request->pengajuan)->update([
                'transaction_time'=>$request->result['transaction_time'],
                'payment_type'=>$request->result['payment_type'] . "-" .$request->result['bank'],
                'payment_status_message'=>$request->result['status_message'],
                'transaction_id'=>$request->result['transaction_id'],
                'approval_code_payment'=>$request->result['approval_code'],
                'jumlah_pembayaran'=>$request->result['gross_amount'],
            ]);

        } catch (\Throwable $th) {
            Pengajuan::where('id',$request->pengajuan)->update([
                'transaction_time'=>$request->result['transaction_time'],
                'payment_type'=>$request->result['payment_type'],
                'payment_status_message'=>$request->result['status_message'],
                'transaction_id'=>$request->result['transaction_id'],
                'approval_code_payment'=>$request->result['approval_code'],
                'jumlah_pembayaran'=>$request->result['gross_amount'],
            ]);

        }

        if ($request->status == "success") {

        Pengajuan::where('id',$request->pengajuan)->update([
            'status'=>5,
            'payment_status'=>2,
        ]);
        }
        else if($request->status == 'pending'){

            Pengajuan::where('id',$request->pengajuan)->update([
                'status'=>4,
                'paymment_status'=>1,
            ]);
        }
        else if($request->status == 'error'){

        Pengajuan::where('id',$request->pengajuan)->update([
            'status'=>4,
            'paymment_status'=>4,
        ]);
        }


        return response()->json(['message'=>'Update Transaction','status'=>'success'], 200);
    }

    public function seeTrackingStatus($id)
    {
        $data = Pengajuan::find($id);
        if ($data->status == 2) {
            dd('Menunggu status selanjutnya');
        }
        else if ($data->status == 3) {
            dd('persetujuan dirjen');
        }
        else if($data->status == 4){
            dd('masa inkubasi');
        }
        else if($data->status == 5){
            dd('tahap eskpor');
        }
    }


    public function trackingPengajuan(Request $request)
    {


        $data = Pengajuan::find($id);
        return redirect('https://www.dhl.com/global-en/home/tracking.html?tracking-id='.$data->no_resi);

        // curl -X GET 'https://api.dhl.com/location-finder/v1/find-by-address?countryCode=GB&addressLocality=London' -H 'DHL-API-Key:dy12Ksm6jHhWmCVg7lN06759qFeGG7AT'
        // curl -X GET 'https://api-eu.dhl.com/track/shipments?trackingNumber=7777777770' -H 'DHL-API-Key:77MmR37FsLQg4ABiwzK4hmc3w5T1BPcR'
        // curl -X GET 'https://api-eu.dhl.com/track/shipments?trackingNumber=7777777770&service=express&originCountryCode=NZ&requesterCountryCode=GB' -H 'DHL-API-Key:77MmR37FsLQg4ABiwzK4hmc3w5T1BPcR'
        // $client = new \GuzzleHttp\Client();

        // $jenis_pekerjaan = $client->request('POST', env('PENGAJUAN_URL').'/v1/b2b/JenisPekerjaan_ShowAll', [
        //     'headers' => [
        //         'app_key' => env('PENGAJUAN_API_KEY'),
        //         'secret_key' => env('PENGAJUAN_API_SECRET'),
        //     ],
        //     'form_params' => [
        //         'App_Key' => env('PENGAJUAN_API_KEY')
        //     ]
        // ]);

        // $kavling = Http::withHeaders([
        //     'app_key' => env('API_KEY'),
        //     'secret_key' => env('API_SECRET')
        // ])->get(env('API_URL').'/getKavling?tipeRumah_id='.$tipeRumah_id);
    }


    public function addTanamanToPengajuan($id)
    {
        $data = Pengajuan::find($id);
        return view('pengajuan.addTanaman',['data'=>$data]);
    }

    public function addTanamanToPengajuanPost(Request $request,$id)
    {
        SubPengajuan::create([
            'pengajuan_id'=>$id,
            'tanaman_id'=>$request->plants,
            'user_id'=>Auth::user()->id,
            'jumlah'=>$request->jumlah,
            'varietas'=>$request->varietas,
        ]);

        return redirect()->back()->with(['message'=>'Successfully added plants in submission','status'=>'success']);
    }

    public function editTanamanPengajuanPost(Request $request,$id)
    {

        SubPengajuan::where('id',$id)->update([

            'jumlah'=>$request->jumlah,
            'varietas'=>$request->varietas,
        ]);

        return redirect()->back()->with(['message'=>'Successfully edited in submission','status'=>'success']);
    }



    public function profile()
    {

        $data = User::find(Auth::user()->id);

        return view('auth.profile',['data'=>$data]);
    }


    public function seeTanamanPengajuan(Request $request,$id)
    {
        $pengajuan = Pengajuan::where('id',$id)->first();
        $data = SubPengajuan::where('pengajuan_id',$id)->get();

        return view('pengajuan.seeTanamanPengajuan',['pengajuan'=>$pengajuan,'data'=>$data]);
    }

    public function seeReport()
    {

        $data = Pengajuan::where('user_id',Auth::id())->where('status','>=' , 2)->get();
        return view('pengajuan.report',['data'=>$data]);

    }


    public function updateProfile(Request $request)
    {
        $data = User::find(Auth::user()->id);
        $data->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
        ]);


        return redirect()->back()->with(['message'=>'Successfully updated your profile','status'=>'success']);


    }

    public function changePassword(Request $request)
    {

        $request->validate([
            'old_pass' => 'required',
            'new_pass' => 'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$?^&@#%]).*$/|confirmed'
        ]);

        if (Hash::check($request->old_pass, Auth::user()->password)) {

            $us = User::find(Auth::id());
            $us->password = Hash::make($request->new_pass);
            $us->save();

            $user = User::where('id', Auth::id())->first();

            Auth::attempt(['email' => $user->email, 'password' => $request->new_pass]);
            return redirect()->back()->with(['message' => 'Password has been changed ','status'=>'success']);
        } else {
            return redirect()->back()->with(['message' => 'Old password is wrong','status'=>'success']);
        }

    }


    public function deleteTanamanPengajuan($id)
    {
        $data = SubPengajuan::find($id);
        $data->delete();
        return redirect()->back()->with(['message'=>'Successfully removed the plant from submission','status'=>'danger']);
    }


    public function downloadPhyto($id)
    {
        $file = Pengajuan::where('id',$id)->first()->file_resi;

            $file_path = public_path('fileResi/'.$file);
            return response()->download( $file_path);

        }

        public function autocompleteSearch(Request $request)
    {
          $query = $request->get('query');
          $dt = [];
          $filterResult = Countries::where('country_name', 'LIKE', '%'. $query. '%')->get();
          foreach ($filterResult as $key => $value) {
                $dt[] = $value->country_name;
          }
          return response()->json($dt);
    }

    public function autocompleteSearchTanaman(Request $request)
    {
          $query = $request->get('query');
          $dtName = [];
          $dtId = [];
          $filterResult = Tanaman::where('name_latin', 'LIKE', '%'. $query. '%')->get();
          foreach ($filterResult as $key => $value) {
                $dtName[] = $value->name_latin.'/'.$value->id;
                $dtId[] = $value->id;
          }
          $data = ['name'=>$dtName,'id'=>$dtId];
          return response()->json($data);
    }

    public function getTanamanId($id)
    {
        $data = Tanaman::where('name_latin',$id)->first();
        return response()->json($data->id);
    }



    public function uploadLisensi($id,Request $request)
    {
        $file = $request->file('file');
        $filelisensi = time() . '-' . $file->getClientOriginalName();
        $file->move(public_path() . '/fileLisensi' . '/', $filelisensi);
        Pengajuan::where('id',$id)->update([
            'file_lisensi'=>$filelisensi,

        ]);

        return redirect()->back()->with(['message'=>'Success add license','status'=>'success']);

    }

    public function filterRequest(Request $request)
    {
        $data = Pengajuan::where('user_id',Auth::id())->where('date','>=',$_GET['start'])->where('date','<=',$_GET['end'])->where('status',$_GET['status'])->get();


        return view('dashboard',['data'=>$data]);
    }

    public function filterReport(Request $request)
    {
        $data = Pengajuan::where('user_id',Auth::id())->where('date','>=',$_GET['start'])->where('date','<=',$_GET['end'])->where('status',$_GET['status'])->get();
        return view('pengajuan.report',['data'=>$data]);
    }

    public function filterRealisation(Request $request)
    {
        $data = Pengajuan::where('date','>=',$_GET['start'])->where('date','<=',$_GET['end'])->get();
        return view('admin.realisation',['data'=>$data]);
    }

    public function testKoneksi()
    {

        Mail::to(env('MAIL_ADMIN'))->send(new PengajuanMail(37));
        dd('sukses');
    }

    public function sendMailContact(Request $request)
    {

        $dd = Mail::to(env('MAIL_ADMIN'))->send(new ContactMail($request));
        return redirect()->back()->with(['message'=>'Success Send Email']);
    }

}
