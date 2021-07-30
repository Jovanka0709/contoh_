@extends('admin/index')
@section('admin-content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            .edit{
                width: 80%;
                margin: 30px auto;
            }
        </style>
    </head>
    <body>
        <div class="edit">
            <form method="post" action="{{ route('produk.update', $model->id) }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" id="" value="PATCH">
                <input type="text" name="nama_produk" class="form-control"value="{{ $model->nama_produk }}" id=""> <br>

                <input type="text" name="harga" class="form-control"value="{{ $model->harga }}" id=""> <br>

                <input type="text" name="deskripsi" class="form-control"value="{{ $model->deskripsi }}" id=""> <br>

                <img src="{{ asset('gambar/' . $model->gambar) }}" alt="" width="200px">
                <input type="file" name="gambar" class="form-control" id=""> <br>

                <select name="kategori" id="" class="form-control">
                    <option value="">Pilih</option>
                    @foreach ($kategori as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                    @endforeach
                  </select>

                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </body>
    </html>
@endsection