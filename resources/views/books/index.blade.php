<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Management System</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #F1FAEE;
            color: #1D3557;
            min-height: 100vh;
        }

        /* Hero Section */
        .hero {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            padding: 100px 80px;
            background-color: #FFFFFF;
        }
        .hero-content {
            max-width: 600px;
            margin-right: 40px;
        }
        .hero h1 {
            font-size: 3.5rem;
            font-weight: bold;
            color: #1D3557;
        }
        .hero h1 .welcome {
            font-family: 'Brush Script MT', cursive;
            font-size: 2.2rem;
            color: #A8DADC;
        }
        .hero h1 .book-management {
            display: block;
            font-size: 3.5rem;
            font-weight: bold;
            color: #1D3557;
        }
        .hero p {
            font-size: 1.5rem;
            color: #457B9D;
            margin-bottom: 30px;
        }
        .hero .btn {
            background-color: #457B9D;
            color: #FFFFFF;
            padding: 12px 30px;
            border-radius: 5px;
            font-size: 1rem;
            transition: background-color 0.3s;
        }
        .hero .btn:hover {
            background-color: #1D3557;
        }
        .hero-image img {
            width: 100%;
            max-width: 800px;
        }

        /* Features Section */
        .features {
            background-color: #A8DADC;
            padding: 80px 40px;
            text-align: center;
        }
        .features h3 {
            font-size: 2.8rem;
            color: #1D3557;
            margin-bottom: 40px;
            font-weight: bold;
        }
        .feature-item {
            background-color: #FFFFFF;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 30px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .feature-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }
        .icon {
            font-size: 3rem;
            color: #457B9D;
            margin-bottom: 15px;
        }
        .feature-item h3 {
            font-size: 1.8rem;
            color: #1D3557;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .feature-item p {
            color: #555;
        }

        /* About Us Section */
        .about {
            background-color: #F1FAEE;
            padding: 50px 40px;
        }
        .about h3 {
            text-align: center;
            font-size: 2.8rem;
            color: #1D3557;
            margin-bottom: 40px;
            font-weight: bold;
        }
        .about-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 80px;
        }
        .about-text {
            flex: 1;
            max-width: 500px;
            color: #555;
            font-size: 1rem;
            line-height: 1.6;
        }
        .about-image {
            flex: 1;
            max-width: 400px;
        }
        .about-image img {
            width: 100%;
        }
    </style>
    </head>
<body>
    <!-- Include Navbar -->
    @include('partials.navbar')

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>
                <span class="welcome">Welcome to</span>
                <span class="book-management">Book Management</span>
            </h1>
            <p>Organize and manage your book collection with ease.</p>
            <a href="{{ route('books.create') }}" class="btn"><i class="fas fa-plus"></i> Add New Book</a>
        </div>
        <div class="hero-image">
            <img src="{{ asset('images/hero.jpg') }}" alt="Woman sitting on the floor using a laptop">
        </div>
    </section>
   
    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <h3>Our Features</h3>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="feature-item p-4">
                        <i class="fas fa-book icon"></i>
                        <h3>Manage Books</h3>
                        <p>Efficiently manage your book collection with our easy-to-use system.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-item p-4">
                        <i class="fas fa-search icon"></i>
                        <h3>Advanced Search</h3>
                        <p>Quickly find any book in your collection using our advanced search feature.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-item p-4">
                        <i class="fas fa-plus-circle icon"></i>
                        <h3>Add New Books</h3>
                        <p>Easily add new books to your collection with a simple and intuitive interface.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
<section id="about" class="about">
    <h3>About Us</h3>
    <div class="about-content">
        <div class="about-text">
            <p>At Book Management System, we’re passionate about making book organization simple and enjoyable. Our platform helps book lovers, librarians, and collectors efficiently manage their collections, so every book finds its place. With an easy-to-use interface, you can quickly add, search, and categorize books, leaving you more time to dive into the stories that matter. Join us in celebrating the power of books and keeping your collection effortlessly organized.</p>
        </div>
        <div class="about-image">
            <img src="{{ asset('images/aboutus.png') }}" alt="Books and library image">
        </div>
    </div>
</section>

    <!-- Include Footer -->
    @include('partials.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
