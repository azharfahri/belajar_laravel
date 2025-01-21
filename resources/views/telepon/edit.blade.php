@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit data telepon</div>

                <div class="card-body">
                        <form action="{{ route('telepon.update', $telepon->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                            <label class="form-label">Nomor</label>
                            <input type="text" placeholder="Masukan nomor" value="{{ $telepon->nomor }}" name="nomor" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">ID Pengguna</label>
                                <select class="form-select" name="id_pengguna" required>
                                    @foreach($pengguna as $data)
                                    <option value="{{ $data->id }}" {{ $data->id == $telepon->id_pengguna ? 'selected' : '' }} >{{ $data->nama }}</option>
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
