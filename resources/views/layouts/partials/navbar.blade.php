<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Test</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                {{-- <li class="nav-item">
                    <a class="nav-link {{ $title == 'Home' ? 'active' : '' }}" href="/">Home</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(1) == null ? 'active' : '' }}"
                        href="{{ route('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->segment(1) == 'posts' ? 'active' : '' || request()->segment(1) == 'post') ? 'active' : '' }}"
                        href="{{ route('post') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(1) == 'categories' ? 'active' : '' }}"
                        href="{{ route('category') }}">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(1) == 'about' ? 'active' : '' }}"
                        href="{{ route('about') }}">About</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                    <div class="dropdown">
                        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Wellcome Back, {{ auth()->user()->name }}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{ route('dashboard') }}"><i
                                        class="bi bi-layout-text-sidebar-reverse"></i> My
                                    Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <li><button type="submit" class="dropdown-item"><i class="bibi-box-arrow-right"></i>
                                        Logout</button>
                                </li>
                            </form>
                        </ul>
                    </div>
                @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}"
                            class="nav-link {{ request()->segment(1) == 'login' ? 'active' : '' }}"><i
                                class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>
