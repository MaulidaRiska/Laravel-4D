<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makul extends Model

{
    protected $table        = 'makul';
    protected $fillable     = ['Kd_makul', 'Nama_makul', 'Sks'];
    public $timestamps      = false;
}