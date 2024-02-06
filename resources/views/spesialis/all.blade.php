@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h1>{{ $title }}</h1>

                <table class="table table-striped-columns">
                    <thead class="table-dark">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Actions</th>
                    </thead>
                    <tbody>
                    @php
                        $no = 1;
                    @endphp

                    @foreach ($spesial as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item['nama'] }}</td>
                            <td>
                                <a href="/kelas/edit/{{ $item->id }}" class="btn btn-warning">
                                    <i class="fa-solid fa-pen-to-square"></i> Edit
                                </a>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $item->id }}">
                                    Delete
                                </button>
                            </td>

                            <div class="modal fade" id="delete{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Yakin ingin menghapus {{ $item->nama }}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <form action="{{ url('$/spesial/delete/' . $item->id) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="col-md-2">
                    <a href="/spesial/create" class="btn btn-success">Add new Data</a>
                </div>
            </div>
        </div>
    </div>
@endsection
