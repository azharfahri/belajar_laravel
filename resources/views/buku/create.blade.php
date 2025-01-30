@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Buku</div>

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
                        <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                            <label class="form-label">Nama buku</label>
                            <input type="text" placeholder="Masukan Nama buku" name="nama_buku" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Harga</label>
                                <input type="number" placeholder="Masukan Harga" name="harga" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Stok</label>
                                <input type="number" placeholder="Masukan Jumlah Stok" name="stok" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" name="cover" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Penerbit</label>
                                <select class="form-select" name="id_penerbit">
                                    @foreach($penerbit as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_penerbit }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Terbit</label>
                                <input type="date" placeholder="Masukan Tanggal" name="tanggal_terbit" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis Genre</label>
                                <select class="form-select" name="id_genre">
                                    @foreach($genre as $data)
                                    <option value="{{ $data->id }}">{{ $data->genre }}</option>
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
