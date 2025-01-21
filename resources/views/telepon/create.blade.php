@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Telepon</div>

                <div class="card-body">
                        <form action="{{ route('telepon.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                            <label class="form-label">Nomor</label>
                            <input type="text" placeholder="Masukan Nomor" name="nomor" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">ID Pengguna</label>
                                <select class="form-select" name="id_pengguna" required>
                                    @foreach($pengguna as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
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
