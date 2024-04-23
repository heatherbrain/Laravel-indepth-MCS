<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = ['nim','nama','jurusan_id'];
    use HasFactory;
    public function jurusan()
     {
         return $this->belongsTo('App\Models\Jurusan');
     }
 
     public function matakuliahs()
     {
         return $this->belongsToMany('App\Models\Matakuliah')->withTimestamps();
     }
}
