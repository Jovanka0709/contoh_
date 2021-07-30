@extends('home/header')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('bs/css/bootstrap.min.css') }}">
        <title>Document</title>
        <style>
            body{
                background-color: #F7F4F2;
            }
            .keranjang{
                width: 80%;
                margin: 30px auto;
            }
            .keranjang a{
                margin: 0 0 0 15px;
                padding: 10px;
                box-sizing: border-box;
                background-color: #333;
                color: white;
                text-decoration: none;
                border-radius: 30px;
            }
            @media(max-width:900px){
                .keranjang{
                    overflow: auto;
                }
            }
        </style>
    </head>
    <body>
        <div class="keranjang">
            <h2>Wishlist</h2>
            <table class="table table-hover">
                <tr>
                    <th>No.</th>
                    <th>Image</th>
                    <th>Name Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Remove</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td><img src="{{ asset('img/kemeja-casual1.jpg') }}" alt="" width="200px"></td>
                    <th>Converse</th>
                    <th>1</th>
                    <th>$ 70</th>
                    <th><button class="btn btn-danger">Remove</button></th>
                </tr>
            </table>
            <br><br>
            <a href="{{ url('home/checkout') }}">CHECKOUT</a>
            <a href="{{ url('home') }}">BACK TO HOME</a>
            <br>
        </div>

        @include('home/trend')
        @include('home/footer')
    </body>
    </html>
@endsection