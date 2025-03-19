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


    <form>
        <div class="container">
            <div class="row mt-5">
                <div class="col-8 m-auto">
                    <div class="card">
                    <div class="card-header">
                        <h3 class="float-start">Form Pembayaran</h3>


          <div class="mb-3">
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Nama Pelanggan">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tanggal Pengambilan</label>
            <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1">
          </div>

          <div class="mb-3">
            <label for="disabledSelect" class="form-label">Jenis</label>
            <select id="disabledSelect" class="form-select">
                <option>Cuci Komplit</option>
                <option>Setrika</option>
                <option>Exspres</option>
                <option>Cuci Saja</option>
                <option>Cuci Goden</option>
                <option>Gorden</option>
                <option>Selimut</option>
                <option>Seprai</option>
                <option>Badcover</option>
                <option>Boneka</option>
              </select>
        </div>
        <div class="mb-3">
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Ukuran">
          </div>
          <div class="mb-3">
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Harga">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Status</label>
            <br>
            <input type="radio" name="sb" value="L"class="" id="exampleInputPassword1"> Sudah Bayar
            <input type="radio" name="bb" value="P"class="" id="exampleInputPassword1"> Belum Bayar
        </div>
          <div class="mb-3">
            <label for="disabledSelect" class="form-label">Metode Pembayaran</label>
            <select id="disabledSelect" class="form-select">
                <option>Cash</option>
                <option>Dana</option>
                <option>Bank BSI</option>
                <option>Bank Aceh</option>
                <option>OVO</option>
                <option>BCA</option>
                <option>BRI</option>
              </select>
        </div>

          <div class="mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
              <label class="form-check-label" for="disabledFieldsetCheck">
              </label>
            </div>
          </div>

          <span class="float-start me-2">
            <a href="/penyerahan" class="btn btn-primary">
              <i class="fa-solid fa-square-plus"></i> Batal
            </a>
          </span>

          <span class="float-start">
            <a href="/struk" class="btn btn-primary">
              <i class="fa-solid fa-square-plus"></i> Submit
              {{-- <button type="button" class="btn btn-primary"> <a class="nav-link" href="/menu">Bayar</a></button> --}}
            </a>
          </span>

        </fieldset>
      </form>

      <script src="{{ asset('/js/bootstrap.js') }}"></script>
      <script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>


</body>
</html>
