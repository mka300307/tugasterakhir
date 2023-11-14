<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function dokter()
    {
        return view('profesi.dokter', [
            'title' =>'Dokter',
            'dokter'=> Dokter::all()
        ]);
    }

    public function showdokter(string $id)
    {
        return view('profesi.detail',
        [
            'title' =>'Detail Dokter',
            'dokter' => Dokter::findOrFail($id)
        ]);
    }
}
