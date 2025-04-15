@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tampilkan data kategori</div>

                <div class="card-body">
                        <form action="{{ route('kategori.show', $kategori->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                            <label class="form-label">Nama Kategori</label>
                            <input type="text" placeholder="" value="{{ $kategori->nama_kategori }}" name="nama" class="form-control" disabled>
                            </div>
                            <a href="{{ route('kategori.index') }}" class="btn btn-danger">Back</a>
                            
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
