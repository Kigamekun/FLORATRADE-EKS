<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    protected $table = 'submissions';
    protected $fillable = ['user_id','pengajuan_id','biaya_karantina','nomor_sip','nomor_phyto','date_phyto','invoice_usd','total_tanaman', 'tanaman_id', 'jumlah', 'negara_tujuan', 'nama_penerima', 'alamat_penerima','email_penerima', 'varietas', 'no_resi', 'file_resi', 'status', 'keterangan','courier','airplane','notelp_penerima', 'snap_token', 'payment_status','trasaction_id','payment_status_message','transaction_time','payment_type','approval_code_payment', 'date','jumlah_pembayaran'];
    use HasFactory;
}
