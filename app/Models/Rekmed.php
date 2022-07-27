<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekmed extends Model
{
    use HasFactory;
    public function pasiens(){
        return $this->hasOne(Pasien::class,'id','');
    }
}
