<!DOCTYPE html>
<html>
<head>
    <title>Book Rental</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Book Rental</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/rented-books">Rented Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/never-rented-books">Never Rented Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/books-price-range">Books Price Range</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/top-customers">Top Customers</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>