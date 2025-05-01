<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use App\Models\Tanaman;
use App\Models\User;
use App\Models\SubPengajuan;
use App\Mail\StatusNotification;
use PDF;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminController extends Controller
{

    public function randomHex() {
        $chars = 'ABCDEF0123456789';
        $color = '#';
        for ( $i = 0; $i < 6; $i++ ) {
           $color .= $chars[rand(0, strlen($chars) - 1)];
        }
        return $color;
     }

    public function index(Request $request)
    {
        $pengajuan = Pengajuan::all();
        $country = [];
        $negara = [];
        $regions = [];
        foreach ($pengajuan as $key => $value) {
            $contry = DB::table('countries')->where('country_name', $value->negara_tujuan)->first();
            try {
               if (!in_array($value->negara_tujuan, $negara)) {
                $country[$key]['latLng'] = [$contry->latitude, $contry->longitude];
                $country[$key]['name'] = $value->negara_tujuan;
                $negara[] = $value->negara_tujuan;
                $regions[$contry->country_code] = $this->randomHex();
               }
            } catch (\Throwable $th) {

            }
        }

        // dd($country,$regions);



        return view('admin.index',['pengajuan'=>$pengajuan,'lastPengajuan'=>Pengajuan::limit(5)->get(),'country'=>$country,'regions'=>$regions,'negara'=>$negara]);
    }

    public function listUser(Request $request)
    {
        $usApprove = User::where('confirmed',TRUE)->get();
        $usNonApprove = User::where('confirmed',FALSE)->get();
        $allUser = User::all();

        return view('admin.datauser',['usApprove'=>$usApprove,'usNonApprove'=>$usNonApprove,'allUser'=>$allUser]);
    }

    public function changeStatus(Request $request)
    {
        Pengajuan::where('id',$request->id)->update([
            'status'=>$request->status
        ]);


        $statusMain = [];
        $statusMain[0] = 'Waiting For Approval';
        $statusMain[1] = 'Approved';
        $statusMain[2] = 'Verifikasi Teknis';
        $statusMain[3] = 'Approval Director General';
        $statusMain[4] = 'Your Request Is Accepted, Please Complete Payment';

        $statusMain[5] = 'Payment Accepted';
        $statusMain[6] = 'Quarantine Process';
        $statusMain[7] = 'Delivery';
        $statusMain[8] = 'Done';

        $bg = '';
        $status = '';
        if ($request->status == 0){
            $bg = 'warning';
            $status = "Menunggu Approve";
        }

    elseif ($request->status < 0){
        $bg = 'danger';
        $status = "Pengajuan Ditolak";
    }


    elseif ($request->status >= 1 && $request->status <= 3){
        $bg = 'warning';
        $status = "Progress (". $request->status .")";
    }

    elseif ($request->status == 4){
        $bg = 'warning';
        $status = "Pending (". $request->status .")";
    }

    elseif ($request->status >= 5 && $request->status <= 7){
        $bg = 'info';
        $status = "Success (". $request->status .")";
    }
    elseif ($request->status >= 8){
        $bg = 'success';
        $status = "Selesai";
    }

    DB::table('notifications')->insert([
        'title'=>'New Request Has Been Created',
        'message'=>"Hello Sir / Ma'am , Your request with ID = ". Pengajuan::where('id',$request->id)->first()->pengajuan_id.' has been changed status to '.$statusMain[$request->status],
        'for'=>Pengajuan::where('id',$request->id)->first()->user_id
    ]);

    return response()->json(['id'=>$request->id,'bg'=>$bg , 'status'=>$status,'data'=>Pengajuan::where('id',$request->id)->first()], 200);
    }


    public function addNoResi(Request $request)
    {
        Pengajuan::where('id',$id)->update([
            'no_resi'=>$request->no_resi
        ]);

        return response()->json(['message'=>'Success add number receipt','status'=>'success'], 200);
    }

    public function addResi(Request $request,$id)
    {


        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileresi = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path() . '/fileResi' . '/', $fileresi);

            Pengajuan::where('id',$id)->update([
                'file_resi'=>$fileresi,
                'no_resi'=>$request->no_resi,
                'courier'=>$request->courier,
                'airplane'=>$request->airplane,
                'no_pyhto'=>$request->no_pyhto,
                'ongkir'=>$request->ongkir,
                'biaya_karantina'=>$request->biaya_karantina,
            ]);
        }else {
            Pengajuan::where('id',$id)->update([

                'airplane'=>$request->airplane,
                'no_pyhto'=>$request->no_pyhto,
                'biaya_karantina'=>$request->biaya_karantina,
                'ongkir'=>$request->ongkir,
                'courier'=>$request->courier,
                'no_resi'=>$request->no_resi
            ]);
        }


        return redirect()->back()->with(['message'=>'Success add receipt','status'=>'success']);
    }

    public function approve($id)
    {
        User::where('id',$id)->update([
            'confirmed'=>TRUE
        ]);



        return redirect()->back()->with(['message'=>'Has been confirmed','status'=>'success']);
    }


    public function cetakPengajuan(Request $request,$id)
    {
        $pengajuan = Pengajuan::where('id',$id)->first();
        $sub_pengajuan = SubPengajuan::where('pengajuan_id',$pengajuan->id)->get();

        $pdf = PDF::loadview('pdf.pengajuan',['pengajuan'=>$pengajuan,'sub_pengajuan'=>$sub_pengajuan]);
        return $pdf->download('PengajuanEkspor'.$pengajuan->pengajuan_id.'.pdf');

    }

    public function cetakInvoice(Request $request,$id)
    {
        $pengajuan = Pengajuan::where('id',$id)->first();
        $sub_pengajuan = SubPengajuan::where('pengajuan_id',$pengajuan->id)->get();

        $pdf = PDF::loadview('pdf.invoice',['pengajuan'=>$pengajuan,'sub_pengajuan'=>$sub_pengajuan]);
        return $pdf->download('Invoice'.$pengajuan->pengajuan_id.'.pdf');

    }

    public function cetakkebenaranDokumen(Request $request,$id)
    {
        $pengajuan = Pengajuan::where('id',$id)->first();
        $sub_pengajuan = SubPengajuan::where('pengajuan_id',$pengajuan->id)->get();

        // return view('pdf.InformasiTanaman');
        $pdf = PDF::loadview('pdf.KebenaranDokumen',['pengajuan'=>$pengajuan,'sub_pengajuan'=>$sub_pengajuan]);
        return $pdf->download('PengajuanKebenaranDokumen'.$pengajuan->pengajuan_id.'.pdf');

    }


    public function informasiTanaman(Request $request,$id)
    {
        $pengajuan = Pengajuan::where('id',$id)->first();
        $sub_pengajuan = SubPengajuan::where('pengajuan_id',$pengajuan->id)->get();
        $listTanaman = [];

        $pdf = PDF::loadview('pdf.InformasiTanaman',['pengajuan'=>$pengajuan,'sub_pengajuan'=>$sub_pengajuan,'listTanaman'=>$listTanaman]);
        return $pdf->download('PengajuanInformasiTanaman'.$pengajuan->pengajuan_id.'.pdf');

    }



    public function seePengajuan()
    {
        $data = Pengajuan::where('status','!=',0)->get();
        $newData = Pengajuan::where('status',0)->get();
        return view('admin.pengajuan',['data'=>$data,'newData'=>$newData]);
    }


    public function approvePengajuan($id)
    {
        $dats = Pengajuan::where('id',$id)->update([
            'status'=>1
        ]);

        DB::table('notifications')->insert([
            'title'=>'New Request Has Been Created',
            'message'=>"Hello Sir / Ma'am , Your request with ID = ". Pengajuan::where('id',$id)->first()->pengajuan_id.' has been Approved ',
            'for'=>Pengajuan::where('id',$id)->first()->user_id
        ]);

        // dd($dats);
        return redirect()->back()->with(['message'=>'Has been confirmed','status'=>'success']);
    }

    public function declinePengajuan(Request $request)
    {
        Pengajuan::where('id',$request->idPengajuan)->update([
            'status'=>-1,
            'keterangan'=>$request->alasan,
        ]);

        DB::table('notifications')->insert([
            'title'=>'Your Request Has Been Decline',
            'message'=>"Hello Sir / Ma'am , Your request with ID = ". Pengajuan::where('id',$request->idPengajuan)->first()->pengajuan_id.' has been Declined ',
            'for'=>Pengajuan::where('id',$request->idPengajuan)->first()->user_id
        ]);
        return redirect()->back()->with(['message'=>'Has been declined','status'=>'danger']);
    }



    public function seeDocument()
    {
        $data = Pengajuan::where('file_resi','!=','')->get();

        return view('admin.document',['data'=>$data]);
    }

    public function sendNotif(Request $request)
    {
        Mail::to(User::where('id',Pengajuan::where('id',$request->id)->first()->user_id)->first()->email)->send(new StatusNotification($request->id));
        return response()->json(['message'=>'Success','status'=>'success'], 200);

    }

    public function countryLicense()
    {
        $data = DB::table('countries')->get();
        return view('admin.country',['data'=>$data]);
    }

    public function listPlants()
    {
        $data = DB::table('base_plants')->get();
        return view('admin.tanaman',['data'=>$data]);
    }


    public function listPricing()
    {
        $data = DB::table('pricings')->get();
        return view('admin.pricing',['data'=>$data]);
    }

    public function changeLicenseCountry(Request $request)
    {

        DB::table('countries')->where('id',$request->country_id)->update([
            'file_lisensi'=>$request->file_lisensi
        ]);

        return response()->json(['message'=>'Success','status'=>'success'], 200);
    }




    public function downloadLicense($id)
    {
        $file = Pengajuan::where('id',$id)->first()->file_lisensi;

            $file_path = public_path('fileLisensi/'.$file);
            return response()->download( $file_path);

        }


        public function editTanaman(Request $request,$id)
        {
            Tanaman::where('id',$id)->update([
                'name_indonesia'=>$request->name_indonesia,
                'name_latin'=>$request->name_latin,
                'price'=>$request->price,

            ]);
            return redirect()->back()->with(['message'=>'Success esit plant','status'=>'success']);
        }


        public function createTanaman(Request $request)
        {
            Tanaman::create([
                'name_indonesia'=>$request->name_indonesia,
                'name_latin'=>$request->name_latin,
                'price'=>$request->price,
                'confirmed'=>1,
            ]);


            return redirect()->back()->with(['message'=>'Success create plant','status'=>'success']);

        }



        public function deleteTanaman($id)
        {
            Tanaman::where('id',$id)->delete();

            return redirect()->back()->with(['message'=>'Success deleted plant','status'=>'success']);
        }


        public function editPricing(Request $request,$id)
        {
            DB::table('pricings')->where('id',$id)->update([
                'count'=>$request->count,
                'value'=>$request->value,


            ]);
            return redirect()->back()->with(['message'=>'Success esit plant','status'=>'success']);
        }


        public function createPricing(Request $request)
        {
            DB::table('pricings')->insert([
                'count'=>$request->count,
                'value'=>$request->value,

            ]);


            return redirect()->back()->with(['message'=>'Success create plant','status'=>'success']);

        }



        public function deletePricing($id)
        {
            DB::table('pricings')->where('id',$id)->delete();

            return redirect()->back()->with(['message'=>'Success deleted plant','status'=>'success']);
        }


        public function listRealisation(Request $request)
        {
            $data = DB::table('submissions')->get();
            return view('admin.realisation',['data'=>$data]);
        }


        public function editRealisation(Request $request,$id)
        {
            Pengajuan::where('id',$id)->update([
                'no_sip'=>$request->no_sip,
                'no_pyhto'=>$request->no_pyhto,
                'invoice_usd'=>$request->invoice_usd,
                'total_tanaman'=>$request->total_tanaman,
                'date_pyhto'=>Carbon::now()->toDateString(),
                'terealisasi'=>$request->terealisasi,

            ]);

            return redirect()->back()->with(['message'=>'Success edit realisasi','status'=>'success']);
        }

}
