<?php

namespace App\Services\Midtrans;

use Midtrans\Snap;
use Illuminate\Support\Facades\Auth;
use App\Models\Tanaman;
use App\Models\SubPengajuan;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CreateSnapTokenService extends Midtrans
{
    protected $pengajuan;

    public function __construct($pengajuan)
    {
        parent::__construct();

        $this->pengajuan = $pengajuan;
    }

    public function getSnapToken()
    {
        $item = [];
        $total = 0;

        $price = 0;
        $total = SubPengajuan::where('pengajuan_id',$this->pengajuan->id)->sum('jumlah');

        foreach (DB::table('pricings')->orderBy('count','DESC')->get() as $ky => $vl) {

                if ($total >= $vl->count) {
                    $price = $vl->value;
                    break;
                }
            }



        foreach (SubPengajuan::where('pengajuan_id',$this->pengajuan->id)->get() as $key => $value) {
            $tnm = Tanaman::where('id', $value->tanaman_id)->first();

            $item[] = [
                'id' => $key,
                'price' => $price,
                'quantity' => $value->jumlah,
                'name' => $tnm->name_indonesia,
            ];

        }



        $params = [
            'transaction_details' => [
                'order_id' => $this->pengajuan->pengajuan_id.Carbon::now()->timestamp,
                'gross_amount' => 1,
            ],
            'item_details' => $item,
            'customer_details' => [
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
                'phone' => Auth::user()->phone,
            ]
        ];

        $snapToken = Snap::getSnapToken($params);

        return $snapToken;
    }
}
