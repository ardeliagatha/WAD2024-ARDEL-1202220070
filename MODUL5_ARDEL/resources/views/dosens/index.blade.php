@extends('layouts.app')

@section('content')
    {{-- Button Tambah Dosen --}}
    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-3">
        <a href="{{ route('dosens.create') }}" class="btn btn-primary d-flex gap-2">
            <div class=""><span class="material-symbols-rounded fs-6"></span></div> Tambah Dosen
        </a>
    </div>

    {{-- Success Alert --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Tabel Dosen --}}
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Kode Dosen</th>
                        <th scope="col">Nama Dosen</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Email</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dosens as $dosen)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $dosen->kode_dosen }}</td>
                            <td>{{ $dosen->nama_dosen }}</td>
                            <td>{{ $dosen->nip }}</td>
                            <td>{{ $dosen->email }}</td>
                            <td>{{ $dosen->no_telepon }}</td>
                            <td>
                                <a href="{{ route('dosens.edit', $dosen->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('dosens.destroy', $dosen->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection