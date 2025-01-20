@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tampilkan data pengguna</div>

                <div class="card-body">
                        <form action="{{ route('pengguna.show', $pengguna->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" placeholder="Masukan Nama Lengkap" value="{{ $pengguna->nama }}" name="nama" class="form-control" disabled>
                            </div>
                            <a href="{{ route('pengguna.index') }}" class="btn btn-danger">Back</a>
                            
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
