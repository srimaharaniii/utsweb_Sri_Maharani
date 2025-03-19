<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pembayaran</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }
        .receipt {
            background: #fcf7f7;
            padding: 20px;
            width: 350px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
        }
        .image-placeholder {
            width: 150px;
            height: 100px;
            background: #fefdfd;
            margin: 0 auto 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 14px;
            color: white;
        }
        .receipt p {
            text-align: left;
            margin: 5px 0;
        }
        /* .success-btn {
            background: #1541c6;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
        } */
    </style>
</head>
<body>
    <div class="receipt">
        <img src="{{ asset ('/image/centang.png')}}" class="img-thumbnail img-fluid" style="width: 300px; height: 200px;" alt="">
        <p>Pesanan Atas Nama : Sri Maharani</p>
        <p>Jenis             : Cuci Komplit</p>
        <p>Harga Satuan      : Rp20.000</p>
        <p>Ukuran            : 1 Kg</p>
        <p>Total Pembayaran  : Rp20.000</p>
        <p>Total Uang Bayar  : Rp.50.000</p>
        <p>Kembalian         : Rp.30.000</p>
        <button type="button" class="btn btn-primary"> <a class="nav-link" href="/menu">Bayar</a></button>
    </div>

    <script src="{{ asset('/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>
</body>
</html>
