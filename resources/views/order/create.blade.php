@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Data Order</div>

                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                        <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">ID Product</label>
                                <select class="form-select" name="id_product" >
                                    @foreach($product as $data)
                                    <option value="{{ $data->id }}">{{ $data->name_product }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Quantity</label>
                            <input type="number" placeholder="Input Quantity" name="quantity" class="form-control" >
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Order Date</label>
                            <input type="date" placeholder="Date Order" name="date" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label class="form-label">ID Customer</label>
                                <select class="form-select" name="id_customer" >
                                    @foreach($customer as $data)
                                    <option value="{{ $data->id }}">{{ $data->name_customer }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
