@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit data pengguna</div>

                <div class="card-body">
                        <form action="{{ route('pengguna.update', $pengguna->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" placeholder="Masukan Nama Lengkap" value="{{ $pengguna->nama }}" name="nama" class="form-control" required>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
