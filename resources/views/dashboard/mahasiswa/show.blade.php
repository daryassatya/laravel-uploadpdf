@extends('dashboard.layouts.main')
@section('container')
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $mahasiswa->nama }}</h1>

                <a href="{{ url()->previous() }}" class="btn btn-dark"><span data-feather="arrow-left"></span> Back to Menu
                    Mahasiswa</a>
                <a href="{{ route('dashboard.mahasiswa.edit', $mahasiswa->nim) }}" class="btn btn-warning"><span
                        data-feather="edit"></span> Edit</a>
                <form action="{{ route('dashboard.mahasiswa.destroy', $mahasiswa->nim) }}" method="post" class="d-inline">
                    @csrf @method('delete')
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span
                            data-feather="x-circle"></span> Delete</button>
                </form>

                <div style="max-height: 350px; overflow:hidden">
                    <img src="{{ asset('storage/foto-mahasiswa/' . $fotoPath) }}" alt="{{ $mahasiswa->foto }}"
                        class="img-fluid mt-3">
                    </div>
                    <p class="mt-2">{{ $fotoName }}</p>

                <article class="my-3 fs-5">{!! $mahasiswa->alamat !!}</article>
                <p>{{ substr($mahasiswa->foto, 15) }}</p>
            </div>
        </div>
    </div>
@endsection
