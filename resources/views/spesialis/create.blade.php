@extends('layout.main')

@section('content')
    <form method="POST" action="/spesial/add">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Spesialis</label>
            <input  class="form-control" id="nama" name="nama" value="{{old('nama,$spesial->nama')}}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
