<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page"
                    href="{{ route('dashboard') }}">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}"
                    href="{{ route('dashboard.posts.index') }}">
                    <span data-feather="file-text"></span>
                    My Posts
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/mahasiswa*') ? 'active' : '' }}"
                    href="{{ route('dashboard.mahasiswa.index') }}">
                    <span data-feather="file-text"></span>
                    Mahasiswa
                </a>
            </li>
        </ul>

        @can('admin')
            <h6 class="sidebar-heading d-flex justify-contentent-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Administrator</span>
            </h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}"
                        href="{{ route('dashboard.categories.index') }}">
                        <span data-feather="grid"></span>
                        Post Categories
                    </a>
                </li>
            </ul>
        @endcan

    </div>
</nav>
