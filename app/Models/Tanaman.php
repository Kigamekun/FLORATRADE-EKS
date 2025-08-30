<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    protected $table = 'base_plants';
    protected $fillable = ['name_indonesia', 'name_latin', 'image','harga'];
    use HasFactory;
}
