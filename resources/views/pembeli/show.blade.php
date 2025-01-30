@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit data pembeli</div>

                <div class="card-body">
                   
                        <form action="{{ route('pembeli.update', $pembeli->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="mb-3">
                            <label class="form-label">Nama pembeli</label>
                            <input type="text" placeholder="Masukan Nama pembeli" value="{{ $pembeli->nama_pembeli }}" disabled name="nama_pembeli" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis Kelamin</label><br>
                                <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki - laki" disabled {{ $pembeli->jenis_kelamin == 'Laki - laki' ? 'checked' : ''  }} > Laki-laki
                                <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan" disabled {{ $pembeli->jenis_kelamin == 'Perempuan' ? 'checked' : ''  }} > Perempuan 
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Telepon</label>
                                <input type="number" placeholder="Masukan nomor Telepon" disabled value="{{ $pembeli->telepon }}" name="telepon" class="form-control" >
                            </div>
                            <a href="{{ route('pembeli.index') }}" class="btn btn-danger">Back</a>
                            
                            
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
