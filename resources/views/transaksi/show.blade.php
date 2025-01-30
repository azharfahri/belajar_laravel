@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit data transaksi</div>

                <div class="card-body">

                        <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="mb-3">
                                <label class="form-label">Jumlah</label>
                                <input disabled type="number" placeholder="Masukan Jumlah" name="jumlah" value="{{ $transaksi->jumlah }}" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Transaksi</label>
                                <input disabled type="date" placeholder="Masukan Tanggal" name="tanggal_transaksi" value="{{ $transaksi->tanggal_transaksi }}" class="form-control" >
                            </div>    
                            <div class="mb-3">
                                <label class="form-label">Nama buku</label>
                                <select disabled class="form-select" name="id_buku" >
                                    @foreach($buku as $data)
                                    <option value="{{ $data->id }}" {{ $data->id == $transaksi->id_buku ? 'selected' : '' }} >{{ $data->nama_buku }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama pembeli</label>
                                <select disabled class="form-select" name="id_pembeli" >
                                    @foreach($pembeli as $data)
                                    <option value="{{ $data->id }}" {{ $data->id == $transaksi->id_pembeli ? 'selected' : '' }} >{{ $data->nama_pembeli }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <a href="{{ route('transaksi.index') }}" class="btn btn-danger">Back</a>
                            
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
