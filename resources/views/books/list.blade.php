<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        h2 {
            color: #1D3557; 
        }
        .table {
            background-color: #EDF6F9; 
            border-radius: 10px;
            overflow: hidden;
        }
        .table th {
            background-color: #A8DADC; 
            color: #1D3557;
            font-weight: bold;
        }
        .table td {
            color: #1D3557;
        }
        .btn-warning {
            background-color: #FFD166;
            color: #1D3557;
            border: none;
        }
        .btn-danger {
            background-color: #EF476F;
            color: #FFFFFF;
            border: none;
        }
        .btn-warning:hover {
            background-color: #EFB954;
        }
        .btn-danger:hover {
            background-color: #D43D5A;
        }
    </style>
</head>
<body>
    <!-- Include Navbar -->
    @include('partials.navbar')

    <!-- Book List Section -->
    <section class="container mt-5">
        <h2 class="text-center mb-4"><b>Book List</b></h2>
        
        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Search Result Message -->
        @if(request()->has('query'))
            <div class="alert alert-info">
                Search results for "{{ request('query') }}":
            </div>
        @endif

        @if($books->isEmpty())
            <p class="text-center">No books found.</p>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Publication Year</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                        <tr>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->publication_year }}</td>
                            <td>
                                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </section>

    <!-- Include Footer -->
    @include('partials.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
