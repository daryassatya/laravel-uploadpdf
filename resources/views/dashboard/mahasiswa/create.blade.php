@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>Create New Mahasiswa</h1>
    </div>

    @if (session()->has('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('failed') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form method="post" action="{{ route('dashboard.mahasiswa.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="col-lg-8 mb-5">
            <div class="mb-3">
                <label for="image" class="form-label">Foto</label>
                <img class="img-preview img-fluid mb-3">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                    name="image" required>
                @error('image')
                    <div id="error" class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="program_studi" class="form-label">Dokumen Mahasiswa</label>
                <input class="form-control @error('dokumen') is-invalid @enderror" type="file" id="dokumen"
                    name="dokumen">
                @error('program_studi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                    value="{{ old('nama') }}" required>
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir"
                    name="tgl_lahir" value="{{ old('tgl_lahir') }}" required>
                @error('tgl_lahir')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="program_studi" class="form-label">Program Studi</label>
                <input type="text" class="form-control @error('program_studi') is-invalid @enderror" id="program_studi"
                    name="program_studi" value="{{ old('program_studi') }}" required>
                @error('program_studi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim"
                    value="{{ old('nim') }}" required>
                @error('nim')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select class="form-select @error('category_id') is-invalid @enderror" name="category_id" id="category_id"
                    required>
                    <option value="">--- Select Post Category ---</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if (old('category_id') == $category->id) selected @endif>
                            {{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <div id="error" class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                @enderror
            </div> --}}
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea rows="3" class="form-control" placeholder="Alamat.." name="alamat">{{ old('alamat') }}</textarea>
                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
@endsection
