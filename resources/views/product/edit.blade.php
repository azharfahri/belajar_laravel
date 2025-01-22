@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit data product</div>

                <div class="card-body">
                        <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                            <label class="form-label">Name Product</label>
                            <input type="text" placeholder="Input Product Name" value="{{ $product->name_product }}" name="name_product" class="form-control" required>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Brand</label>
                            <input type="text" placeholder="Input Brand" name="merk" value="{{ $product->merk }}" class="form-control" required>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="number" placeholder="Input Price" name="price" value="{{ $product->price }}" class="form-control" required>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Stock</label>
                            <input type="number" placeholder="Input Stock" name="stock" value="{{ $product->stock }}" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
