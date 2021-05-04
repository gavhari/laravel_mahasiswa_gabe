<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswas extends Model
{
    protected $table="mahasiswas";
 	protected $primaryKey="id";
 	protected $fillable=['nim','nama_lengkap','jurusan'];
}