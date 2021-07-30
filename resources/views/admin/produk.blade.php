@extends('admin/index')
@section('admin-content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=`, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
    </head>
    <body>
      <br><br>
      @if (Session::has('pesan'))
            <p class="alert alert-info">{{ Session::get('pesan') }}</p>
        @endif
        <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insertProduk">
        Insert Produk
      </button>
        <div class="modal fade" id="insertProduk" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="insertProduk" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="insertProdukLabel">Insert Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="{{ route('produk.store') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="nama_produk" class="form-control" placeholder="Input nama_produk" id=""><br>

                    <input type="text" name="harga" class="form-control" placeholder="Input harga" id=""><br>

                    <input type="file" name="gambar" class="form-control" placeholder="Input gambar" id=""><br>

                   <textarea name="deskripsi" class="form-control" placeholder="Deskripsi"></textarea><br>

                   <select name="kategori" id="" class="form-control">
                     <option value="">Pilih</option>
                     @foreach ($kategori as $item)
                         <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                     @endforeach
                   </select>
                   <br>

                   <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
               
            </div>
          </div>
        </div>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insertKategori">
          Insert Kategori
        </button>
          <div class="modal fade" id="insertKategori" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="insertKategori" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="insertKategoriLabel">Insert Kategori</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="post" action="{{ url('produk/insertKategori') }}" enctype="multipart/form-data">
                      @csrf
                      <input type="text" name="nama_kategori" class="form-control" placeholder="Input nama_kategori" id=""><br>
  
                      <input type="file" name="gambar" class="form-control" placeholder="Input gambar" id=""><br>
  
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
                 
              </div>
            </div>
          </div>
        
          <table class="table table-hover">
            <tr>
              <th>No.</th>
              <th>Gambar</th>
              <th>Name Product</th>
              <th>Harga</th>
              <th>Deskripsi</th>
              <th>Kategori</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
            @php
                $i=1;
            @endphp
            @foreach ($produk as $item)
                <tr>
                  <td>{{ $i++ }}</td>
                  <td><img src="{{ asset('gambar/' . $item->gambar) }}" alt=""></td>
                  <td>{{ $item->nama_produk }}</td>
                  <td>{{ $item->harga }}</td>
                  <td>{{ $item->deskripsi }}</td>
                  <td>{{ $item->Kategori->nama_kategori }}</td>
                  <td><a href="{{ route('produk.edit', $item->id) }}" class="btn btn-primary">Edit</a></td>
                  <td>
                    <form method="post" action="{{ route('produk.destroy', $item->id) }}">
                      @csrf
                       <input type="hidden" name="_method" id="" value="DELETE">
                       <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </td>
                  
                </tr>
            @endforeach
          </table>
    </body>
    </html>
@endsection
