<!doctype html>
<html lang="en">

<head>
  <title>Book Detail</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    @include('layout.navbar')
  <main style="padding-top:180px; background:#2fa941">
    <div class="card">
        <div class="card-body">
            <h4>Book Details: {{$book->title}}</h4>
            {{-- <h4 class="card-title">{{$book->title}}</h4>
            <p class="card-text">{{$book->description}}</p> --}}
            <div class="row">
                <div>
                    <p>{{$book->description}}</p>

                <div class="col-md-5">
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" value="Title: {{$book->title}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" name="description" value="Author: {{$book->author->name}}">
                    </div>
                </div>
                {{-- <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control" name="price" value="Price: {{$book->price}} (VNĐ)">
                    </div>
                </div> --}}
                </div>
           </div>
        </div>
    </div>
  </main>

  @include('layout.footer')

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
