@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Informasi data siswa</div>

                <div class="card-body">
                        <form action="{{ route('siswa.show', $siswa->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                            <label class="form-label">NIS</label>
                            <input type="number" placeholder="Masukan NIS" name="nis" value="{{ $siswa->nis }}" class="form-control" disabled>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" placeholder="Masukan Nama" value="{{ $siswa->nama }}" name="nama" class="form-control" disabled>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label><br>
                            <input type="radio" class="form-check-input" name="jeniskelamin" value="Laki - laki" disabled > Laki-laki
                            <input type="radio" class="form-check-input" name="jeniskelamin" value="Perempuan" disabled > Perempuan 
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kelas</label>
                                <select class="form-select" name="kelas" disabled>
                                    <option value="">{{ $siswa->kelas }}</option>
                                    <option value="XI RPL 1">XI RPL 1</option>
                                    <option value="XI RPL 2">XI RPL 2</option>
                                    <option value="XI RPL 3">XI RPL 3</option>
                                </select>
                            </div>
                            <a href="{{ route('siswa.index') }}" class="btn btn-danger">Back</a>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
