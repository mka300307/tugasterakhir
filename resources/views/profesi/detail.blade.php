@extends('layout.main')

@section('content')
    <div class="container">

        @auth
            <div class="pb-3">
                <a href='{{ url('/dashbord') }}' class="btn btn-danger"> Kembali </a>
            </div>
        @else
            <div class="pb-3">
                <a href='{{ url('/profesi/dokter') }}' class="btn btn-danger"> Kembali </a>
            </div>
        @endauth

        <h1 class="display-4 mb-4">Detail Dokter</h1>

        <div class="form-group p-3" data-aos="fade-up">
            <label for="nama">Nama Dokter</label>
            <input type="nama" id="nama" name="nama" value="{{ $dokter->name }}" class="form-control" readonly>
        </div>

        <div class="form-group p-3" data-aos="fade-up">
            <label for="umur">Alamat Dokter</label>
            <input type="int" id="umur" name="umur" value="{{ $dokter->alamat }}" class="form-control" readonly>
        </div>

        <div class="form-group p-3" data-aos="fade-up">
            <label for="kota">NO Register</label>
            <input type="text" id="kota" name="kota" value="{{ $dokter->no_registrasi }}" class="form-control" readonly>
        </div>

        <div class="form-group p-3" data-aos="fade-up">
            <label for="kota">NO Register</label>
            <input type="text" id="kota" name="kota" value="{{ $dokter->spesialis}}" class="form-control" readonly>
        </div>

        <div class="form-group p-3" data-aos="fade-up">
            <label for="lahir">Karir</label>
            <input type="date" id="lahir" name="lahir" value="{{ $dokter->karir }}" class="form-control" readonly>
        </div>
    </div>
@endsection
