@extends('master')
@section('content')
<div class="container position-absolute top-0 end-0">
    <main class="col-md-12 ml-sm-auto px-auto">



<table class="table table-bordered">
    <div class="row mt-0" >
        <div class="bg-primary-subtle">
            <h2 class="mt-5 text-top">Harga</h2>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Jenis</th>
        <th scope="col">Harga</th>
        <th scope="col">Satuan</th>
        <th scope="col">Action</th>

        <div class="mt-2 "><span class="float-end"><a href="/formp" class="btn btn-primary"><i class="fa-solid fa-square-plus"></i>Tambah Data </a></span>

            {{-- <span class="float-end"><a class="btn btn-primary"><i class="fa-solid fa-square-plus"></i>Tambah Data </a></span> --}}
        </div>
    </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Cuci Komplit</td>
        <td>6000</td>
        <td>/kg</td>
        <td>
            <button type="button" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
        </td>


      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Setrika</td>
        <td>3000</td>
        <td>/Kg</td>
        <td>
            <button type="button" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
        </td>

      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Exspres</td>
        <td>12000</td>
        <td>/Kg</td>
        <td>
            <button type="button" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Cuci Saja</td>
        <td>3000</td>
        <td>/Kg</td>
        <td>
            <button type="button" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Gorden</td>
        <td>6000</td>
        <td>/Kg</td>
        <td>
            <button type="button" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Selimut</td>
        <td>6000</td>
        <td>/Kg</td>
        <td>
            <button type="button" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Jas</td>
        <td>10000</td>
        <td>/Biji</td>
        <td>
            <button type="button" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Badcover</td>
        <td>15000</td>
        <td>/Biji</td>
        <td>
            <button type="button" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Boneka</td>
        <td>8000</td>
        <td>/Kg</td>
        <td>
            <button type="button" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
        </td>
      </tr>
    </tbody>
  </table>
</main>
</div>
@endsection
