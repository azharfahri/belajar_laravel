@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show data product</div>

                <div class="card-body">
                        <form action="{{ route('product.show', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="mb-3">
                            <label class="form-label">Name Product</label>
                            <input type="text" placeholder="Input Product Name" value="{{ $product->name_product }}" name="name_product" class="form-control" disabled>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Brand</label>
                            <input type="text" placeholder="Input Brand" name="merk" value="{{ $product->merk }}" class="form-control" disabled>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="number" placeholder="Input Price" name="price" value="{{ $product->price }}" class="form-control" disabled>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Stock</label>
                            <input type="number" placeholder="Input Stock" name="stock" value="{{ $product->stock }}" class="form-control" disabled>
                            </div>
                            <a href="{{ route('product.index') }}" class="btn btn-danger">Back</a>
                            
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
