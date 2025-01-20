@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tampilkan data PPDB</div>

                <div class="card-body">
                        <form action="{{ route('ppdb.show', $ppdb->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" placeholder="Masukan Nama Lengkap" value="{{ $ppdb->nama_lengkap }}" name="nama" class="form-control" disabled>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label><br>
                            <input type="radio" class="form-check-input" name="jeniskelamin" value="Laki - laki" > Laki-laki
                            <input type="radio" class="form-check-input" name="jeniskelamin" value="Perempuan" > Perempuan 
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Agama</label>
                                <select class="form-select" name="agama" disabled>
                                    <option value="">{{ $ppdb->agama }}</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindhu">Hindhu</option>
                                    <option value="Hindhu">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                <textarea class="form-control" id="" name="alamat" rows="3" value="" disabled>{{ $ppdb->alamat }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nomor Telepon</label>
                                <input type="number" placeholder="Masukan Nomor Telepon" value="{{ $ppdb->telepon }}" name="telepon" class="form-control" disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Asal Sekolah</label>
                                <input type="text" placeholder="Masukan Asal Sekolah" value="{{ $ppdb->asal_sekolah }}" name="asalsekolah" class="form-control" disabled>
                            </div>
                            <a href="{{ route('ppdb.index') }}" class="btn btn-danger">Back</a>
                            
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
