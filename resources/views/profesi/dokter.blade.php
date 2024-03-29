@extends('layout.main')

@section('content')
    <h1>ini adalah halaman dokter</h1>
    <table class="table table-striped table-hover table-bordered">
        <thead class="table-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">No Register</th>
            <th scope="col">Spesialis</th>
            <th scope="col">Alamat</th>
            <th scope="col">Karir</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <?php
        $no = 1;
        ?>
        <tbody>
        @foreach($dokter as $data)
            <tr>
                <th scope="row"><?= $no++ ?></th>
                <td>{{$data['name']}}</td>
                <td>{{$data['no_registrasi']}}</td>
                <td>{{$data->spesial->nama}}</td>
                <td>{{$data['alamat']}}</td>
                <td>{{$data['karir']}}</td>
                <td>
{{--                    @auth--}}
{{--                        <a href="/profesi/detail/{{ $data->id }}"><button type="button" class="btn btn-info" ><i class="fa-solid fa-circle-info"></i> Info</button></a>--}}
{{--                        <button type="button" class="btn btn-danger">Danger</button>--}}
{{--                        <button type="button" class="btn btn-warning">Warning</button>--}}
{{--                    @else--}}
                        <a href="/profesi/detail/{{ $data->id }}"><button type="button" class="btn btn-info" ><i class="fa-solid fa-circle-info"></i> Info</button></a>
{{--                    @endauth--}}


                </td>
            </tr>

        </tbody>
        @endforeach
    </table>



@endsection
