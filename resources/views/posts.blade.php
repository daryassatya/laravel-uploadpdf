@extends('layouts.main')
@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-5">
            <form action="{{ route('post') }}">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" name="search"
                        value="{{ request('search') }}">
                    <div class="input-group-append">
                        <button class="btn btn-outline-dark" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- Akan mengahsilkan false jika 0 --}}
    @if ($posts->count())
        <div class="card mb-3">
            @if ($posts[0]->image)
                <div style="max-height: 350px; overflow:hidden">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"
                        class="card-img-top">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top"
                    alt="{{ $posts[0]->category->name }}">
            @endif

            <div class="card-body text-center">
                <a href="{{ route('post.detail', $posts[0]->slug) }}" class="text-decoration-none text-dark">
                    <h3 class="card-title">{{ $posts[0]->title }}</h3>
                </a>
                <p>
                    <small class="text-muted">
                        By. <a href="{{ route('post', ['author' => $posts[0]->author->username]) }}"
                            class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a
                            href="{{ route('post', ['category' => $posts[0]->category->slug]) }}"
                            class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="{{ route('post.detail', $posts[0]->slug) }}" class='text-decoration-none'>Read more..</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.7)">
                                <a href="{{ route('post', ['category' => $posts[0]->category->slug]) }}"
                                    class="text-decoration-none text-white">{{ $post->category->name }}</a>
                            </div>
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                    class="card-img-top">
                            @else
                                <img src="https://source.unsplash.com/500x400/?{{ $post->category->name }}"
                                    class="card-img-top" alt="{{ $post->category->name }}">
                            @endif

                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p>By. <a href="{{ route('post', ['author' => $post->author->username]) }}"
                                        class="text-decoration-none">{{ $post->author->name }}</a></p>
                                <p>{{ $post->excerpt }}</p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="{{ route('post.detail', $post->slug) }}" class="btn btn-primary">Read
                                    more..</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- <a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a> --}}
        {{-- @foreach ($posts->skip(1) as $post)
            <article class="mb-5 border-bottom">
                <h2>
                    <a href="{{ route('post.detail', $post->slug) }}"
                        class="text-decoration-none">{{ $post->title }}</a>
                </h2>
                <p>By. <a href="{{ route('post.author', $post->author->username) }}"
                        class="text-decoration-none">{{ $post->author->name }}</a> in <a
                        href="{{ route('category.spesific', $post->category->slug) }}"
                        class="text-decoration-none">{{ $post->category->name }}</a></p>
                <p>{{ $post->excerpt }}</p>
                <a href="{{ route('post.detail', $post->slug) }}" class='text-decoration-none'>Read more..</a>
            </article>
        @endforeach --}}
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>

@endsection
