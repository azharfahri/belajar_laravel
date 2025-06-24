@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit data buku</div>

                <div class="card-body">
                        <form action="{{ route('buku.show', $buku->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Nama buku</label>
                                <input type="text" placeholder="Masukan Nama buku" name="nama_buku" value="{{ $buku->nama_buku }}" disabled class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Harga</label>
                                    <input type="number" placeholder="Masukan Harga" value="{{ $buku->harga }}" name="harga" disabled class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Stok</label>
                                    <input type="number" placeholder="Masukan Jumlah Stok" name="stok" value="{{ $buku->stok }}" disabled class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Cover</label>
                                    <img src="{{ asset('/images/buku/' . $buku->cover) }}" width="100">
                                </div>
                            <div class="mb-3">
                                <label class="form-label">Penerbit</label>
                                <select class="form-select" disabled name="id_penerbit" >
                                    @foreach($penerbit as $data)
                                    <option value="{{ $data->id }}" {{ $data->id == $buku->id_penerbit ? 'selected' : '' }} >{{ $data->nama_penerbit }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Stok</label>
                                <input disabled type="date" placeholder="Masukan tanggal" name="tanggal_terbit" value="{{ $buku->tanggal_terbit }}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Genre</label>
                                <select disabled class="form-select" name="id_genre" >
                                    @foreach($genre as $data)
                                    <option value="{{ $data->id }}" {{ $data->id == $buku->id_genre ? 'selected' : '' }} >{{ $data->genre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <a href="{{ route('buku.index') }}" class="btn btn-danger">Back</a>

                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
