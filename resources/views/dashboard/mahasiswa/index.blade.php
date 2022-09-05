@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>List Mahasiswa</h1>
    </div>

    <div class="box-header">
        <div class="col-12 mt-5">
            @include('components.flash-message')
        </div>
    </div>
    <div class="box-body">
        <div class="table-responsive col-lg-9">
            <a href="{{ route('dashboard.mahasiswa.create') }}" class="btn btn-primary mb-3">Create New Mahasiswa</a>
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
                            <td class="ps-0 py-8">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-20">
                                        <div class="bg-img h-50 w-50"
                                            style="background-image: url({{ asset('storage/' . $mahasiswa->foto) }})">
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $mahasiswa->nama }}</td>
                            <td>{{ $mahasiswa->program_studi }}</td>
                            <td>
                                <a href="{{ route('dashboard.mahasiswa.show', $mahasiswa->nim) }}"
                                    class="badge bg-info"><span data-feather="eye"></span></a>
                                <a href="{{ route('dashboard.mahasiswa.edit', $mahasiswa->nim) }}"
                                    class="badge bg-warning"><span data-feather="edit"></span></a>
                                <form action="{{ route('dashboard.mahasiswa.destroy', $mahasiswa->nim) }}" method="post"
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
    </div>
@endsection
