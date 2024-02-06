@extends('layout.main')

@section('content')
    <form method="POST" action="/profesi/add">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Nama Dokter</label>
            <input type="text" class="form-control"  id="name" name="name" value="{{old('name,$dokter->name')}}">
        </div>
        <div class="mb-3">
            <label  class="form-label">No Registrasi</label>
            <input type="number" class="form-control" id="no_registrasi" name="no_registrasi" value="{{old('no_registrasi,$dokter->no_registrasi')}}">
        </div>
        <div class="mb-3">
            <label  class="form-label">Spesialis</label>
            <select class="form-select" name="spesial_id" id="spesial_id">
                @foreach($dokter as $item)
                    <option name="spesial_id" value="{{$item -> id}}">{{ $item->nama }}</option>
                @endforeach
            </select>
{{--            <!-- <input  class="form-control"  id="kelas" name="kelas" value="{{old('kelas,$dokter->kelas')}}"> -->--}}
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input  class="form-control" id="alamat" name="alamat" value="{{old('alamat,$dokter->alamat')}}">
        </div>
        <div class="mb-3">
            <label  class="form-label">Karir</label>
            <input  class="form-control" id="karir" name="karir" type="date" value="{{old('karir,$dokter->karir')}}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
