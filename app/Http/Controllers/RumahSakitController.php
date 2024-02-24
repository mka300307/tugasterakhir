<?php

namespace App\Http\Controllers;

use App\Models\rumahSakiti;
use Illuminate\Http\Request;

class RumahSakitController extends Controller
{
    public function rs()
    {
        return view('rs.rumahsakit',
        [
            'title' => 'Rumah Sakit',
            'rs' => rumahSakiti::all()
        ]);
    }

    public function showrs(string $id)
    {
        return view('rs.detail',
        [
            'title' => 'Detail Rumah Sakit',
            'rs' => rumahSakiti::findOrFail($id)
        ]);
    }
}
