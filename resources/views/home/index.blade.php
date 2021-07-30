@extends('home.header')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <div class="container-poster">
            <div class="poster-satu">
                <img src="{{ asset('img/poster-jadi.jpeg') }}" alt="" >
            </div>
            <div class="poster-dua">
                <img src="{{ asset('img/poster4.jpg') }}" alt="" >
                <div class="text-poster">
                    <h3>Free Shipping All Over Indonesia</h3>
                </div>
            </div>
        </div>

        <div class="container-kategori">
            <h2>KATEGORI</h2>
            <br><br>
            <div class="flex-kategori">

                <div class="box-kategori">
                    <div class="tengah-kategori">
                        <a href="{{ url('home/detail_kategori') }}">
                            <img src="{{ asset('img/1t-shirt-man.png') }}" alt="">
                        </a>
                        <p>Shoes</p>
                    </div>
                </div>

                <div class="box-kategori">
                    <div class="tengah-kategori">
                        <a href="{{ url('home/detail_kategori') }}">
                            <img src="{{ asset('img/1t-shirt-man.png') }}" alt="">
                        </a>
                        <p>Shoes</p>
                    </div>
                </div>

                <div class="box-kategori">
                    <div class="tengah-kategori">
                        <a href="{{ url('home/detail_kategori') }}">
                            <img src="{{ asset('img/1t-shirt-man.png') }}" alt="">
                        </a>
                        <p>Shoes</p>
                    </div>
                </div>

                <div class="box-kategori">
                    <div class="tengah-kategori">
                        <a href="{{ url('home/detail_kategori') }}">
                            <img src="{{ asset('img/1t-shirt-man.png') }}" alt="">
                        </a>
                        <p>Shoes</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-produk">
            <h3><span>OUR</span> PRODUCT</h3>
            <br><br>
            <div class="input-produk">
                <input type="text" name="keyword" id="" class="form-control" placeholder="Search Product..">
                <button type="submit" class="btn btn-primary">Search</button>
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