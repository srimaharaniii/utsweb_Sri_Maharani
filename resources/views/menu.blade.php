<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <title>Menu Utama</title>
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
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark">
                <img src="{{ asset ('/image/price.png')}}" class="img-thumbnail img-fluid" style="width: 40px; height: 40px;" alt=""> Menu
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
        <button class="btn btn-light mt-4">Log out</button>
    </div>

    <div class="container position-absolute top-0 end-0">
        <main class="col-md-12 ml-sm-auto px-auto">

            <div class="row mt-0" >
                <div class="bg-primary-subtle d-flex align-items-center" style="height: 10vh;">
                    <h2 class="ms-5">Selamat Datang di Aplikasi Pengelolaan Laundry</h2>
                </div>

                <div class="container" style="width: 900px">
                <div class="row justify-content-center" style="width: 900px">
                    <div class="col-4">
                      <input type="text" class="form-control bg-danger-subtle" placeholder="Jumlah Pelangaan" disabled aria-label="">
                    </div>
                    <div class="col">
                      </div>
                    <div class="col" style="width: 300px">
                      <input type="text" class="form-control bg-danger-subtle" placeholder="Total Penghasilan" disabled aria-label="">
                    </div>
                </div>
                <div class="row justify-content-center mt-5" >
                    <div class="container" style="width:">
                    <div class="row" style="width: 900px">
                        <div class="col" style="width: 300px; height: auto;">
                            <input type="text" class="form-control bg-danger-subtle"
                                   placeholder="Penghasilan Tahun"
                                   disabled
                                   aria-label=""
                                   style="width: 100%; height: 95px;">
                          </div>
                          <div class="col" style="width: 300px; height: auto;">
                            <input type="text" class="form-control bg-danger-subtle"
                                   placeholder="Penghasilan Bulan"
                                   disabled
                                   aria-label=""
                                   style="width: 100%; height: 95px;">
                          </div>
                          <div class="col" style="width: 300px; height: auto;">
                            <input type="text" class="form-control bg-danger-subtle"
                                   placeholder="Penghasilan Minggu"
                                   disabled
                                   aria-label=""
                                   style="width: 100%; height: 95px;">
                          </div>
                    </div>





                {{-- <div class="col-md-3">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-header">Jumlah Pelanggan</div>
                        {{-- <div class="card-body">
                            <h5 class="card-title">{{ $data['jumlah_pelanggan'] }}</h5>
                        </div> --}}
                    {{-- </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-header">Total Penghasilan</div>
                        {{-- <div class="card-body">
                            <h5 class="card-title">Rp. {{ number_format($data['penghasilan_tahun'], 0, ',', '.') }}</h5>
                        </div> --}}
                    {{-- </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-warning mb-3">
                        <div class="card-header">Penghasilan Bulan</div>
                        {{-- <div class="card-body">
                            <h5 class="card-title">Rp. {{ number_format($data['penghasilan_bulan'], 0, ',', '.') }}</h5>
                        </div> --}}
                    {{-- </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-danger mb-3">
                        <div class="card-header">Penghasilan Minggu</div>
                        {{-- <div class="card-body">
                            <h5 class="card-title">Rp. {{ number_format($data['penghasilan_minggu'], 0, ',', '.') }}</h5>
                        </div> --}}
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="{{ asset('/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>

</body>
</html>
