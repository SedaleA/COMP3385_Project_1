<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $book->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-light bg-white shadow-sm px-4">
    <a class="navbar-brand fw-bold" href="/books">BookSwap</a>
    <a href="/books/create" class="btn btn-primary">+ Add Book</a>
</nav>

<div class="container mt-5">

    <a href="/books" class="text-decoration-none">← Back</a>

    <div class="card mt-3 shadow-sm">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('storage/' . $book->photo) }}" class="img-fluid rounded-start">
            </div>

            <div class="col-md-8">
                <div class="card-body">
                    <p>{{ $book->course_code }}</p>
                    <h3>{{ $book->title }}</h3>
                    <p class="text-muted">By {{ $book->author }}</p>

                    <span class="badge bg-info text-dark">{{ $book->condition }}</span>

                    <p class="mt-3">{{ $book->description }}</p>

                    <h2>${{ number_format($book->price, 2) }}</h2>

                    <button class="btn btn-primary">Contact Seller</button>
                </div>
            </div>
        </div>
    </div>

</div>

</body>
</html>