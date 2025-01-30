@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit data buku</div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                        <form action="{{ route('buku.update', $buku->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Nama buku</label>
                                <input type="text" placeholder="Masukan Nama buku" name="nama_buku" value="{{ $buku->nama_buku }}" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Harga</label>
                                    <input type="number" placeholder="Masukan Harga" value="{{ $buku->harga }}" name="harga" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Stok</label>
                                    <input type="number" placeholder="Masukan Jumlah Stok" name="stok" value="{{ $buku->stok }}" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Cover</label>
                                    <img src="{{ asset('/images/buku/' . $buku->cover) }}" width="100">
                                    <input type="file" class="form-control" name="cover">
                                </div>
                            <div class="mb-3">
                                <label class="form-label">Penerbit</label>
                                <select class="form-select" name="id_penerbit" >
                                    @foreach($penerbit as $data)
                                    <option value="{{ $data->id }}" {{ $data->id == $buku->id_penerbit ? 'selected' : '' }} >{{ $data->nama_penerbit }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Stok</label>
                                <input type="date" placeholder="Masukan tanggal" name="tanggal_terbit" value="{{ $buku->tanggal_terbit }}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Genre</label>
                                <select class="form-select" name="id_genre" >
                                    @foreach($genre as $data)
                                    <option value="{{ $data->id }}" {{ $data->id == $buku->id_genre ? 'selected' : '' }} >{{ $data->genre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
