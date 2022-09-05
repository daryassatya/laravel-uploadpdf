@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>My Post</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive col-lg-9">
        <a href="{{ route('dashboard.mahasiswa.create') }}" class="btn btn-primary mb-3">Create New Post</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Program Studi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $mahasiswa)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $loop->foto }}</td>
                        <td>{{ $mahasiswa->nama }}</td>
                        <td>{{ $mahasiswa->program_studi }}</td>
                        <td>
                            <a href="{{ route('dashboard.mahasiswa.show', $mahasiswa->slug) }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="{{ route('dashboard.mahasiswa.edit', $mahasiswa->slug) }}" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                            <form action="{{ route('dashboard.mahasiswa.destroy', $mahasiswa->slug) }}" method="post"
                                class="d-inline">
                                @csrf @method('delete')
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span
                                        data-feather="x-circle"></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
