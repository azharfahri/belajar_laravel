@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tampilkan data genre</div>

                <div class="card-body">
                        <form action="{{ route('genre.show', $genre->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="mb-3">
                            <label class="form-label">Nama genre</label>
                            <input type="text" value="{{ $genre->genre }}" name="genre" class="form-control" disabled>
                            </div>
                            <a href="{{ route('genre.index') }}" class="btn btn-danger">Back</a>
                            
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
