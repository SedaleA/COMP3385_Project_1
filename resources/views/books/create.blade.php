<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-light bg-white shadow-sm px-4">
    <a class="navbar-brand fw-bold" href="/books">BookSwap</a>
    <a href="/books/create" class="btn btn-primary">+ Add Book</a>
</nav>

<div class="container mt-5">
    <div class="card shadow-sm p-4">
        <a href="/books" class="text-decoration-none mb-3">← Back to listings</a>
        <h3>Add New Book</h3>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/books" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Author</label>
                <input type="text" name="author" class="form-control">
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Course Code</label>
                    <input type="text" name="course_code" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Price ($)</label>
                    <input type="text" name="price" class="form-control">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Condition</label>
                <select name="condition" class="form-select">
                    <option>New</option>
                    <option>Good</option>
                    <option>Fair</option>
                    <option>Poor</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Photo</label>
                <input type="file" name="photo" class="form-control">
            </div>

            <button class="btn btn-primary w-100">Add Book</button>
        </form>
    </div>
</div>

</body>
</html>