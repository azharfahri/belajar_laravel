@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah data siswa</div>

                <div class="card-body">
                        <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                            <label class="form-label">NIS</label>
                            <input type="number" placeholder="Masukan NIS" name="nis" class="form-control" required>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" placeholder="Masukan Nama" name="nama" class="form-control" required>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label><br>
                            <input type="radio" class="form-check-input" name="jeniskelamin" value="Laki - laki" > Laki-laki
                            <input type="radio" class="form-check-input" name="jeniskelamin" value="Perempuan" > Perempuan 
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kelas</label>
                                <select class="form-select" name="kelas" required>
                                    <option value="">Pilih Kelas</option>
                                    <option value="XI RPL 1">XI RPL 1</option>
                                    <option value="XI RPL 2">XI RPL 2</option>
                                    <option value="XI RPL 3">XI RPL 3</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" name="cover" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
