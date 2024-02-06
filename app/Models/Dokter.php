<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'no_registrasi', 'spesial_id', 'alamat', 'karir'];
    public function spesial(){
        return $this->belongsTo(Spesial::class);
    }

}
