@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Order</div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <a href="{{ route('order.create') }}" type="button" class="btn btn-primary">Add</a>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Id Product</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Order Date</th>
                            <th scope="col">Id Customer</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($order as $data)
                            <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $data->product->name_product }}</td>
                            <td>{{ $data->quantity }}</td>
                            <td>{{ $data->order_date }}</td>
                            <td>{{ $data->customer->name_customer }}</td>
                            <td>
                                <form action="{{ route('order.destroy',$data->id) }}" method="POST">
                                <a href="{{ route('order.edit',$data->id) }}" type="button" class="btn btn-success">Edit</a>
                                <a href="{{ route('order.show',$data->id) }}" type="button" class="btn btn-warning">show</a>
                                
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
