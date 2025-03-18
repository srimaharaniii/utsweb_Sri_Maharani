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
                        <h3 class="float-start">Form Data Pelanggan</h3>


          <div class="mb-3">
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Nama Pelanggan">
          </div>
          <div class="mb-3">
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Alamat Pelanggan">
          </div>
          <div class="mb-3">
            <input type="text" id="disabledTextInput" class="form-control" placeholder="No Telpon">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
            <br>
            <input type="radio" name="jk" value="L"class="" id="exampleInputPassword1"> Laki Laki
            <input type="radio" name="jk" value="P"class="" id="exampleInputPassword1"> perempuan
        </div>
          <div class="mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
              <label class="form-check-label" for="disabledFieldsetCheck">
              </label>
            </div>
          </div>
          
          <span class="float-start me-2">
            <a href="/pelanggan" class="btn btn-primary">
              <i class="fa-solid fa-square-plus"></i> Batal
            </a>
          </span>
          
          <span class="float-start">
            <a href="/pelanggan" class="btn btn-primary">
              <i class="fa-solid fa-square-plus"></i> Submit
            </a>
          </span>
          
        </fieldset>
      </form>

      <script src="{{ asset('/js/bootstrap.js') }}"></script>
      <script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>


</body>
</html>
