@extends('master')
@section('content')
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
</div>

@endsection
