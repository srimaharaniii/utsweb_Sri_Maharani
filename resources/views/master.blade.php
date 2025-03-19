<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/all.css') }}">
    <title>@yield('title')</title>
</head>
<body>

    <div class="col-5  mt-0 ">
        <div class="row">
            <div claSS="col-sm-6 mb-3 mb-sm-0">

    <div class="d-flex flex-column p-3 bg-primary-subtle" style="width: 220px; height: 100vh;">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item d-flex justify-content-center">
                <a href="#" class="nav-link text-dark">
                    <img src="{{ asset ('/image/profil.png')}}" class="img-thumbnail img-fluid" style="width: 100px; height: 100px;" alt="">
                    <br>Sri Maharani</br>
                </a>
            </li>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark">
                <img src="{{ asset ('/image/home.png')}}" class="img-thumbnail img-fluid" style="width: 40px; height: 40px;" alt=""> Menu
            </a>
        </li>
            <li class="nav-item">
                <a href="{{ url('/harga') }}" class="nav-link text-dark">
                    <img src="{{ asset ('/image/price.png')}}" class="img-thumbnail img-fluid" style="width: 40px; height: 40px;" alt=""> Harga Satuan
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/pelanggan') }}"  class="nav-link text-dark">
                    <img src="{{ asset ('/image/people.png')}}" class="img-thumbnail img-fluid" style="width: 40px; height: 40px;" alt=""> Pelanggan
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/penyerahan') }}" class="nav-link text-dark">
                    <img src="{{ asset ('/image/penyerahan.png')}}" class="img-thumbnail img-fluid" style="width: 40px; height: 40px;" alt=""> Penyerahan
                </a>
            </li>

        </ul>
        <button class="btn btn-light mt-4"> <a class="nav-link" href="/login"> Log out </a></button>
    </div>

    @yield('content')

                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="{{ asset('/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('/js/all.js') }}"></script>

</body>
</html>
