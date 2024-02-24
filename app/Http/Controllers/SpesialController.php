<?php

namespace App\Http\Controllers;

use App\Models\Spesial;
use Illuminate\Http\Request;

class SpesialController extends Controller
{
    public static function index(){

        return view('spesialis/all',[
            "title" => "Ini ",
            "spesial" => Spesial::all()
        ]);
    }

    public function create(){
        return view('spesialis.create', [
            'title' => 'Add Data',
        ]);
    }

    public function store(Request $request)
    {
        //data yg dikirim di validasi disini
        $validateData = $request->validate([
            'nama' => 'required',
        ]);

        //sebuah data akan dibuat dan akan ditambahkan ke database
        $result = Spesial::create($validateData);

        if ($result) {
            return redirect('/spesial/all')-> with('success', 'Data siswa berhasil ditambahkan');
        }


    }

    public function destroy($id)
    {
        //mencari id berdasarkan id yang sudah ditrima oleh parameter
        $kelas = Spesial::find($id);

        if (!$kelas) {
            return redirect('spesial/all')->with('error', 'Data siswa tidak ditemukan.');
        }
        $kelas->delete();
        return redirect('spesial/all')->with('worked', 'Data berhasil dihapus.');
    }

    public function edit($id)
    {
        return view('spesialis.edit',
            [
                'title' =>'edit nama kelas',
                "spesial" => Spesial::findOrFail($id)
            ]
        );
    }

    public function update(Request $req, $id)
    {
        $validateData = $req->validate([
            'nama' => 'required',
        ]);

        // Find the student by ID
        $kelas = Spesial::findOrFail($id);
        $kelas->update($validateData);
        return redirect('spesial/all')->with('success', 'Data Anda berhasil diupdate');
    }
}
