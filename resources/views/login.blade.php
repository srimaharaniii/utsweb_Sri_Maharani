<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <title>Document</title>
</head>
<body>

    <div class="col-2 m-auto">
        <div class="row mt-5">
    <div class="card text-center mb-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"> LOGIN </h5>
          <div class="form-floating mb-4 row mt-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-4 row mt-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

          <a href="/menu" class="btn btn-primary"> login </a>
        </div>
      </div>
    </div>
</div>


    <script src="{{ asset('/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>
</body>
</html>
