<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/all.css') }}">

    <title>Pelanggan</title>
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
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/menu') }}"  class="nav-link text-dark">
                    <img src="{{ asset ('/image/price.png')}}" class="img-thumbnail img-fluid" style="width: 40px; height: 40px;" alt=""> Menu
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/harga') }}" class="nav-link text-dark">
                    <img src="{{ asset ('/image/price.png')}}" class="img-thumbnail img-fluid" style="width: 40px; height: 40px;" alt=""> Harga Satuan
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-dark">
                    <img src="{{ asset ('/image/people.png')}}" class="img-thumbnail img-fluid" style="width: 40px; height: 40px;" alt=""> Pelanggan
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/penyerahan') }}" class="nav-link text-dark">
                    <img src="{{ asset ('/image/penyerahan.png')}}" class="img-thumbnail img-fluid" style="width: 40px; height: 40px;" alt=""> Penyerahan
                </a>
            </li>

        </ul>
        <button class="btn btn-light mt-4">Log out</button>
    </div>

    <div class="container position-absolute top-0 end-0">
        <main class="col-md-12 ml-sm-auto px-auto">



    <table class="table table-striped">
        <div class="row mt-0" >
            <div class="bg-primary-subtle">
                <h2 class="mt-5 text-top">Data Pelanggan</h2>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Pelanggan</th>
            <th scope="col">Alamat Pelanggan</th>
            <th scope="col">No Telpon</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Action</th>

            <div class="mt-2 "><span class="float-end"><a href="/formp" class="btn btn-primary"><i class="fa-solid fa-square-plus"></i>Tambah Data </a></span>

                {{-- <span class="float-end"><a class="btn btn-primary"><i class="fa-solid fa-square-plus"></i>Tambah Data </a></span> --}}
            </div>
        </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Sri Maharani</td>
            <td>Lampaseh</td>
            <td>084455667788</td>
            <td>Perempuan</td>
            <td>
                <button type="button" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
                <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </td>


          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Sri Maharani</td>
            <td>Lampaseh</td>
            <td>084455667788</td>
            <td>Perempuan</td>
            <td>
                <button type="button" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
                <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </td>

          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Sri Maharani</td>
            <td>Lampaseh</td>
            <td>084455667788</td>
            <td>Perempuan</td>
            <td>
                <button type="button" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
                <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Sri Maharani</td>
            <td>Lampaseh</td>
            <td>084455667788</td>
            <td>Perempuan</td>
            <td>
                <button type="button" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
                <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Sri Maharani</td>
            <td>Lampaseh</td>
            <td>084455667788</td>
            <td>Perempuan</td>
            <td>
                <button type="button" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
                <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Sri Maharani</td>
            <td>Lampaseh</td>
            <td>084455667788</td>
            <td>Perempuan</td>
            <td>
                <button type="button" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
                <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Sri Maharani</td>
            <td>Lampaseh</td>
            <td>084455667788</td>
            <td>Perempuan</td>
            <td>
                <button type="button" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
                <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Sri Maharani</td>
            <td>Lampaseh</td>
            <td>084455667788</td>
            <td>Perempuan</td>
            <td>
                <button type="button" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
                <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Sri Maharani</td>
            <td>Lampaseh</td>
            <td>084455667788</td>
            <td>Perempuan</td>
            <td>
                <button type="button" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
                <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </main>

      <script src="{{ asset('/js/bootstrap.js') }}"></script>
      <script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>
      <script src="{{ asset('/js/all.js') }}"></script>

</body>
</html>

