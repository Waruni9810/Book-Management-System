<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        .card {
            background-color: #EDF6F9;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        h2 {
            color: #1D3557;
        }
        .form-group label {
            color: #1D3557;
            font-weight: bold;
        }
        .form-control {
            border-radius: 8px;
            border: 1px solid #A8DADC;
            background-color: #ffffff;
        }
        .form-control:focus {
            border-color: #457B9D;
            box-shadow: 0 0 5px rgba(69, 123, 157, 0.2);
        }
        .btn {
            background-color: #457B9D;
            color: #FFFFFF;
            border-radius: 8px;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #1D3557;
        }
    </style>
</head>
<body>
    <!-- Include Navbar -->
    @include('partials.navbar')

    <!-- Add Book Form -->
    <div class="container mt-5">
        <h2 class="text-center mb-4"><b>Add New Book</b></h2>
        <div class="card p-4">
            <div class="card-body">
                <form action="{{ route('books.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" required>
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="author">Author</label>
                        <input type="text" id="author" name="author" class="form-control" value="{{ old('author') }}" required>
                        @error('author')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="publication_year">Publication Year</label>
                        <input type="number" id="publication_year" name="publication_year" class="form-control" value="{{ old('publication_year') }}" required>
                        @error('publication_year')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Centered Button -->
                    <div class="form-group text-center">
                        <button type="submit" class="btn"><i class="fas fa-save"></i> Add Book</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Include Footer -->
    @include('partials.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
