@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data transaksi</div>

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
                        <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                            <label class="form-label">Jumlah</label>
                            <input type="number" placeholder="Masukan Jumlah" name="jumlah" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Transaksi</label>
                                <input type="date" placeholder="Masukan Tanggal" name="tanggal_transaksi" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Buku</label>
                                <select class="form-select" name="id_buku">
                                    @foreach($buku as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_buku }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Pembeli</label>
                                <select class="form-select" name="id_pembeli">
                                    @foreach($pembeli as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_pembeli }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
