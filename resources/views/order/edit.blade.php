@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit data order</div>

                <div class="card-body">
                        <form action="{{ route('order.update', $order->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">ID Product</label>
                                <select class="form-select" name="id_product" required>
                                    @foreach($product as $data)
                                    <option value="{{ $data->id }}" {{ $data->id == $order->id_product ? 'selected' : '' }} >{{ $data->name_product }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Quantity</label>
                            <input type="number" placeholder="Input Quantity" value="{{ $order->quantity }}" name="quantity" class="form-control" required>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Order Date</label>
                            <input type="date" placeholder="Date Order" name="date" value="{{ $order->order_date }}" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">ID Customer</label>
                                <select class="form-select" name="id_customer" required>
                                    @foreach($customer as $data)
                                    <option value="{{ $data->id }}" {{ $data->id == $order->id_customer ? 'selected' : '' }} >{{ $data->name_customer }}</option>
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
</div>
@endsection
