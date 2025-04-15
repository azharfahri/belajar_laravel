@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit data Produk</div>

                <div class="card-body">
                        <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" placeholder="Masukan Nama Produk" value="{{ $produk->nama_produk }}" name="nama_produk" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Harga</label>
                                <input type="text" placeholder="Masukan Harga" name="harga" value="{{ $produk->harga }}" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Stok</label>
                                <input type="number" placeholder="Masukan Jumlah Stok" value="{{ $produk->stok }}" name="stok" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kategori</label>
                                <select class="form-select" name="id_kategori" required>
                                    @foreach($kategori as $data)
                                    <option value="{{ $data->id }}" {{ $data->id == $produk->id_kategori ? 'selected' : '' }} >{{ $data->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Cover</label>
                                <img src="{{ asset('/images/produk/' . $produk->cover) }}" width="100">
                                <input type="file" class="form-control" name="cover">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
