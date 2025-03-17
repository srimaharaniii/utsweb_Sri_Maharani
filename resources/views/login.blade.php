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
    <div class="col-5 m-auto">
        <div class="row mt-5">
            <div claSS="col-sm-6 mb-3 mb-sm-0">
            <div class="card text-center">

                <div class="card-header bg-success-subtle"> login</div>
                <div>
                    <div class="card-body bg-dark-subtle">
                        <div class="form-floating mb-4 row mt-3">

                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <label for="exampleInputEmail1">Email address</label>

                        </div>
                        <div class="form-floating mb-4 row mt-3">

                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <label for="exampleInputEmail1">Password</label>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary">Login</a>
                </div>
            </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>
</body>
</html>
