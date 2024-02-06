<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Spesial;
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

    public function edit($id)
    {
        return view('kelas.edit',
            [
                'title'=>'halaman edit',
                "dokter" => Dokter::findOrFail($id)
            ]);
    }

    public function create()
    {
        return view('profesi.create',[
            'title' => 'create-new-data',
            'dokter' => Spesial::all()
        ]);
    }

    public function store(Request $req)
    {
        $student = new Dokter();
        $student->name = $req->name;
        $student->no_registrasi = $req->no_registrasi;
        $student->spesial_id = $req->spesial_id;
        $student->alamat = $req->alamat;
        $student->karir = $req->karir;
        $student->created_at = $req->created_at;
        $student->save();

        return redirect('profesi/dokter')->with('success', 'Data Anda berhasil ditambahkan');


    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, $id)
    {
        $validatedData = $req->validate([
            'nama' => 'required|string',
            'no_registrasi' => 'required|numeric',
            'spesial_id' => 'required|string',
            'alamat' => 'required|string',
            'karir' => 'required|date',

        ]);

        $kelas= Dokter::findOrFail($id);
        $kelas->update($validatedData);
        return redirect('profesi/dokter')->with('update', 'Data Anda berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $student = Dokter::find($id);

        if (!$student) {
            return redirect('profesi/dokter')->with('error', 'Data siswa tidak ditemukan.');
        }
        $student->delete();
        return redirect('profesi/dokter')->with('worked', 'Data berhasil dihapus.');
    }
}
