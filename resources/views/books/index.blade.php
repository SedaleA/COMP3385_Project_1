<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-light bg-white shadow-sm px-4">
    <a class="navbar-brand fw-bold" href="/books">BookSwap</a>
    <a href="/books/create" class="btn btn-primary">+ Add Book</a>
</nav>

<div class="bg-light text-center py-5">
    <h2>Buy and Sell Textbooks</h2>
    <p>The Student Marketplace for used textbooks.Find great deals or sell your old books to fellow students.</p>
</div>

<div class="container mt-4">

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        @foreach($books as $book)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('storage/' . $book->photo) }}" class="card-img-top" style="height:250px; object-fit:cover;">

                    <div class="card-body">
                        <span class="badge bg-secondary">{{ $book->condition }}</span>

                        <h5 class="mt-2">{{ $book->title }}</h5>
                        <p class="mb-1">{{ $book->course_code }}</p>
                        <p class="text-muted">By {{ $book->author }}</p>

                        <h4>${{ number_format($book->price, 2) }}</h4>

                        <a href="/books/{{ $book->id }}" class="btn btn-primary btn-sm mt-2">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>

</body>
</html>