@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah data Kategori</div>

                <div class="card-body">
                        <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                            <label class="form-label">Nama Kategori</label>
                            <input type="text" placeholder="Masukan Kategori" name="nama_kategori" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
