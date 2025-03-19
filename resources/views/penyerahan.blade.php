@extends('master')
@section('content')

<div class="container position-absolute top-0 end-0">
    <main class="col-md-12 ml-sm-auto px-auto">



<table class="table table-striped">
    <div class="row mt-0" >
        <div class="bg-primary-subtle">
            <h2 class="mt-5 text-top">Data Penyerahan</h2>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Pelanggan</th>
        <th scope="col">Tgl Penyerahan</th>
        <th scope="col">Tgl Selesai</th>
        <th scope="col">Tgl Pengambilan</th>
        <th scope="col">jenis</th>
        <th scope="col">Ukuran</th>
        <th scope="col">Harga</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>

        <div class="mt-2 ">
            <span class="float-end"><a href="/formpenyerahan" class="btn btn-primary"><i class="fa-solid fa-square-plus"></i>Tambah Data </a></span>
            {{-- <span class="float-end"><a class="btn btn-primary"><i class="fa-solid fa-square-plus"></i>Tambah Data </a></span> --}}
        </div>
    </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Sri Maharani</td>
        <td>22/12/2024</td>
        <td>25/12/2024</td>
        <td>27/12/2024</td>
        <td>Cuci Komplit</td>
        <td>1 kg</td>
        <td>20.000</td>
        <td>Sudah Bayar</td>
        <td>
            <button type="button" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            <button type="button" class="btn btn-success"> <a class="nav-link" href="/pembayaran">Bayar</a></button>
        </td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Sri Maharani</td>
        <td>22/12/2024</td>
        <td>25/12/2024</td>
        <td>27/12/2024</td>
        <td>Cuci Komplit</td>
        <td>1 kg</td>
        <td>20.000</td>
        <td>Sudan Bayar</td>
        <td>
            <button type="button" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            <button type="button" class="btn btn-success"> <a class="nav-link" href="/pembayaran">Bayar</a></button>
        </td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Sri Maharani</td>
        <td>22/12/2024</td>
        <td>25/12/2024</td>
        <td>27/12/2024</td>
        <td>Cuci Komplit</td>
        <td>1 kg</td>
        <td>20.000</td>
        <td>Sudah Bayar</td>
        <td>
            <button type="button" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            <button type="button" class="btn btn-success"> <a class="nav-link" href="/pembayaran">Bayar</a></button>
        </td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Sri Maharani</td>
        <td>22/12/2024</td>
        <td>25/12/2024</td>
        <td>27/12/2024</td>
        <td>Cuci Komplit</td>
        <td>1 kg</td>
        <td>20.000</td>
        <td>Belum Bayar</td>
        <td>
            <button type="button" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            <button type="button" class="btn btn-success"> <a class="nav-link" href="/pembayaran">Bayar</a></button>
        </td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Sri Maharani</td>
        <td>22/12/2024</td>
        <td>25/12/2024</td>
        <td>27/12/2024</td>
        <td>Cuci Komplit</td>
        <td>1 kg</td>
        <td>20.000</td>
        <td>Belum Bayar</td>
        <td>
            <button type="button" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            <button type="button" class="btn btn-success"> <a class="nav-link" href="/pembayaran">Bayar</a></button>
        </td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Sri Maharani</td>
        <td>22/12/2024</td>
        <td>25/12/2024</td>
        <td>27/12/2024</td>
        <td>Cuci Komplit</td>
        <td>1 kg</td>
        <td>20.000</td>
        <td>Belum Bayar</td>
        <td>
            <button type="button" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            <button type="button" class="btn btn-success"> <a class="nav-link" href="/pembayaran">Bayar</a></button>
        </td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Sri Maharani</td>
        <td>22/12/2024</td>
        <td>25/12/2024</td>
        <td>27/12/2024</td>
        <td>Cuci Komplit</td>
        <td>1 kg</td>
        <td>20.000</td>
        <td>Belum Bayar</td>
        <td>
            <button type="button" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            <button type="button" class="btn btn-success"> <a class="nav-link" href="/pembayaran">Bayar</a></button>
        </td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Sri Maharani</td>
        <td>22/12/2024</td>
        <td>25/12/2024</td>
        <td>27/12/2024</td>
        <td>Cuci Komplit</td>
        <td>1 kg</td>
        <td>20.000</td>
        <td>Belum Bayar</td>
        <td>
            <button type="button" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            <button type="button" class="btn btn-success"> <a class="nav-link" href="/pembayaran">Bayar</a></button>
        </td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Sri Maharani</td>
        <td>22/12/2024</td>
        <td>25/12/2024</td>
        <td>27/12/2024</td>
        <td>Cuci Komplit</td>
        <td>1 kg</td>
        <td>20.000</td>
        <td>Belum Bayar</td>
        <td>
            <button type="button" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            <button type="button" class="btn btn-success"> <a class="nav-link" href="/pembayaran">Bayar</a></button>
        </td>
      </tr>
    </tbody>
  </table>
</main>
</div>

@endsection
