@extends('layout.layout')

<!doctype html>
<html lang="en">

<head>
  <title>Add New Author</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main style="padding-top:180px; background:#2fa941; color:aliceblue">
    <form action="/authors" method="post" >
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Author Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Author name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Author Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Author email">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Author Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Author phone">
        </div>
        <div class="mb-3">
            <label for="birthday" class="form-label">Author Birthday</label>
            <input type="text" class="form-control" id="birthday" name="birthday" placeholder="Author Email">
        </div>
        <div class="mb-3">
            <label for="biography" class="form-label">Author Biography</label>
            <textarea class="form-control" id="biography" name="biography" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </main>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>
</html>
