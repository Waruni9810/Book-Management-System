<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('books.index') }}">Book Management</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto align-items-center">
                <!-- Search Form without Search Button -->
                <li class="nav-item d-flex align-items-center">
                    <form action="{{ route('books.search') }}" method="GET" class="d-flex">
                        <input class="form-control search-bar" type="search" name="query" placeholder="Search Books" aria-label="Search">
                    </form>
                </li>
                <!-- Other Links -->
                <li class="nav-item ml-3">
                    <a class="nav-link" href="{{ route('books.index') }}#about">About Us</a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link" href="{{ route('books.create') }}">Add New Book</a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link" href="{{ route('books.list') }}">View Book List</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
