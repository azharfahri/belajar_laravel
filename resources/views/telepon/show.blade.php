@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lihat data telepon</div>

                <div class="card-body">
                        <form action="{{ route('telepon.index', $telepon->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                            <label class="form-label">Nomor</label>
                            <input type="number" placeholder="Masukan nomor" value="{{ $telepon->nomor }}" name="nomor" class="form-control" disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">ID Pengguna</label>
                                <select class="form-select" name="id_pengguna" disabled>
                                    @foreach($pengguna as $data)
                                    <option value="{{ $data->id }}" {{ $data->id == $telepon->id_pengguna ? 'selected' : '' }} >{{ $data->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <a href="{{ route('telepon.index') }}" class="btn btn-danger">Back</a>
                            
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
