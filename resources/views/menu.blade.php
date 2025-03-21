@extends('master')
@section('content')
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
@endsection
