<nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">BLOGS_002</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $page_active === 'home' ? 'active' : '' }}" aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $page_active === 'about' ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $page_active === 'blogs' ? 'active' : '' }}" href="/blogs">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $page_active === 'categories' ? 'active' : '' }}"
                        href="/categories">Categories</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
