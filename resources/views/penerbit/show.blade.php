@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tampilkan data penerbit</div>

                <div class="card-body">
                        <form action="{{ route('penerbit.show', $penerbit->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="mb-3">
                            <label class="form-label">Nama penerbit</label>
                            <input type="text" value="{{ $penerbit->nama_penerbit }}" name="nama_penerbit" class="form-control" disabled>
                            </div>
                            <a href="{{ route('penerbit.index') }}" class="btn btn-danger">Back</a>
                            
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
