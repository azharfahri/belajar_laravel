@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Data Product</div>

                <div class="card-body">
                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                            <label class="form-label">Name Product</label>
                            <input type="text" placeholder="Input Product Name" name="name_product" class="form-control" required>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Brand</label>
                            <input type="text" placeholder="Input Brand" name="merk" class="form-control" required>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="number" placeholder="Input Price" name="price" class="form-control" required>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Stock</label>
                            <input type="number" placeholder="Input Stock" name="stock" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
