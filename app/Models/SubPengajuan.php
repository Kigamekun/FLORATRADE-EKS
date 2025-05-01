<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubPengajuan extends Model
{
    protected $table = 'sub_submissions';
    protected $fillable = ['pengajuan_id','tanaman_id','user_id','jumlah','varietas'];
    use HasFactory;
}
