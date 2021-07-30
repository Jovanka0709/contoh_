@extends('home/header')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            .container-produk{
    width: 80%;
    margin: 30px auto;
}
h3 span{
    padding: 10px;
    box-sizing: border-box;
    background-color: #333;
    color: white;
}
.input-produk{
    margin: 5px auto;
    width: 50%;
    display: flex;
}
.flex-produk{
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}
.box-produk{
     width: 22%;
     text-align: center;
     margin: 30px 0 0 0;
}
.box-produk:hover{
    background-color: #fff;
}
.box-produk img{
    width: 100%;
    height: 180px;
}
.text-kategori{
    padding: 20px;
    box-sizing: border-box;
    background-color: #fff;
    width: 100%;
    margin: 10px auto;
}

@media(max-width:900px){
    .poster-dua{
        display: none;
    }
    .poster-satu{
        width: 100%;
    }
    .box-kategori{
        width: 45%;
        margin: 15px 0 0 0;
    }
    .box-produk{
        width: 80%;
    }
    .input-produk{
        width: 80%;
    }
}
        </style>
    </head>
    <body>
        <div class="container-produk">
            <div class="text-kategori">
                <h3>NAME KATEGORI</h3>
            </div>
            <br>
            <div class="flex-produk">

                <div class="box-produk">
                    <a href="{{ url('home/detail_produk') }}">
                        <img src="{{ asset('img/kemeja-casual1.jpg') }}" alt="">
                    </a>
                    <h5>Tshirt</h5>
                    <p>$ 70</p>
                </div>

                <div class="box-produk">
                    <a href="{{ url('home/detail_produk') }}">
                        <img src="{{ asset('img/kemeja-casual1.jpg') }}" alt="">
                    </a>
                    <h5>Tshirt</h5>
                    <p>$ 70</p>
                </div>

                <div class="box-produk">
                    <a href="{{ url('home/detail_produk') }}">
                        <img src="{{ asset('img/kemeja-casual1.jpg') }}" alt="">
                    </a>
                    <h5>Tshirt</h5>
                    <p>$ 70</p>
                </div>

                <div class="box-produk">
                    <a href="{{ url('home/detail_produk') }}">
                        <img src="{{ asset('img/kemeja-casual1.jpg') }}" alt="">
                    </a>
                    <h5>Tshirt</h5>
                    <p>$ 70</p>
                </div>

                <div class="box-produk">
                    <a href="{{ url('home/detail_produk') }}">
                        <img src="{{ asset('img/kemeja-casual1.jpg') }}" alt="">
                    </a>
                    <h5>Tshirt</h5>
                    <p>$ 70</p>
                </div>

                <div class="box-produk">
                    <a href="{{ url('home/detail_produk') }}">
                        <img src="{{ asset('img/kemeja-casual1.jpg') }}" alt="">
                    </a>
                    <h5>Tshirt</h5>
                    <p>$ 70</p>
                </div>

                <div class="box-produk">
                    <a href="{{ url('home/detail_produk') }}">
                        <img src="{{ asset('img/kemeja-casual1.jpg') }}" alt="">
                    </a>
                    <h5>Tshirt</h5>
                    <p>$ 70</p>
                </div>

                <div class="box-produk">
                    <a href="{{ url('home/detail_produk') }}">
                        <img src="{{ asset('img/kemeja-casual1.jpg') }}" alt="">
                    </a>
                    <h5>Tshirt</h5>
                    <p>$ 70</p>
                </div>
            </div>
        </div>
        @include('home/trend')
        @include('home/footer')
    </body>
    </html>
@endsection