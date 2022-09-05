@extends('dashboard.layouts.main')
@section('container')
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <a href="{{ url()->previous() }}" class="btn btn-dark"><span data-feather="arrow-left"></span> Back to My
                    Post</a>
                <a href="{{ route('dashboard.posts.edit', $post->slug) }}" class="btn btn-warning"><span
                        data-feather="edit"></span> Edit</a>
                <form action="{{ route('dashboard.posts.destroy', $post->slug) }}" method="post" class="d-inline">
                    @csrf @method('delete')
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span
                            data-feather="x-circle"></span> Delete</button>
                </form>

                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid mt-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid mt-3">
                @endif

                <article class="my-3 fs-5">{!! $post->body !!}</article>

                <a href="{{ route('post') }}" class="d-block">Back to posts</a>
            </div>
        </div>
    </div>
@endsection
