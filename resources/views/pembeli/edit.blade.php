@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit data pembeli</div>

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
                        <form action="{{ route('pembeli.update', $pembeli->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                            <label class="form-label">Nama pembeli</label>
                            <input type="text" placeholder="Masukan Nama pembeli" value="{{ $pembeli->nama_pembeli }}" name="nama_pembeli" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis Kelamin</label><br>
                                <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki - laki" {{ $pembeli->jenis_kelamin == 'Laki - laki' ? 'checked' : ''  }} > Laki-laki
                                <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan" {{ $pembeli->jenis_kelamin == 'Perempuan' ? 'checked' : ''  }} > Perempuan 
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Telepon</label>
                                <input type="number" placeholder="Masukan nomor Telepon" value="{{ $pembeli->telepon }}" name="telepon" class="form-control" >
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
