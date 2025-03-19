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
                        <h3 class="float-start">Form Data Penyerahan</h3>


          <div class="mb-3">
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Nama Pelanggan">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tanggal Penyerahan</label>
            <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tanggal Selesai</label>
            <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1">
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
            <a href="/penyerahan" class="btn btn-primary">
              <i class="fa-solid fa-square-plus"></i> Submit
            </a>
          </span>

        </fieldset>
      </form>

      <script src="{{ asset('/js/bootstrap.js') }}"></script>
      <script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>


</body>
</html>
