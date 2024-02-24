<?php

namespace App\Http\Controllers;

use App\Models\Dashbord;
use App\Models\Dokter;
use App\Models\Spesial;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dokter = Dokter::simplePaginate(5)->onEachSide(3);

        $filter = Spesial::all();

        return view('dashbord.index', compact('dokter','filter'));

    }

    public function filter(Request $request)
    {
        $spesialId = $request->input('spesial_id');

        if ($spesialId =="Semua Data") {
            $dokter = Dokter::simplePaginate(5)->onEachSide(3);
            $filter = Spesial::all();
            return view('dashbord.index', compact('dokter', 'filter'));
        }

        $dokter = Dokter::where('spesial_id', $spesialId)->paginate(5);
        $filter = Spesial::all();
        return view('dashbord.index', compact('dokter', 'filter'));
    }

    public function detail($id)
    {
        return view('dashbord.detail',
            [
                'title' =>'Detail Dokter',
                'dokter' => Dokter::findOrFail($id),

            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashbord.create',[
            'title' => 'create-new-data',
            'dokter' => Spesial::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
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

        return redirect('dashbord/')->with('success', 'Data Anda berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Dashbord $dashbord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view(
            'dashbord.edit',
            [
                "kelas" => Spesial::all(),
                "student" => Dokter::findOrFail($id),
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $req, $id)
    {
        $validatedData = $req->validate([
            'name' => 'required|string',
            'no_registrasi' => 'required|numeric',
            'spesial_id' => 'required|string',
            'alamat' => 'required|string',
            'karir' => 'required|date',

        ]);

        $student= Dokter::findOrFail($id);
        $student->update($validatedData);
        return redirect('dashbord/')->with('update', 'Data Anda berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $student = Dokter::find($id);

        if (!$student) {
            return redirect('dashbord/')->with('error', 'Data siswa tidak ditemukan.');
        }
        $student->delete();
        return redirect('dashbord/')->with('worked', 'Data berhasil dihapus.');
    }

}
