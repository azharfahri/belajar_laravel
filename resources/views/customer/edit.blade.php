@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit data customer</div>

                <div class="card-body">
                        <form action="{{ route('customer.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                            <label class="form-label">Name customer</label>
                            <input type="text" placeholder="Input customer Name" value="{{ $customer->name_customer }}" name="name_customer" class="form-control" required>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Gender</label><br>
                            <input type="radio" class="form-check-input" name="gender" value="{{ $customer->gender }}" > Male
                            <input type="radio" class="form-check-input" name="gender" value="{{ $customer->gender }}" > Female 
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Contact</label>
                            <input type="number" placeholder="Input Contact Number" name="contact" value="{{ $customer->contact }}"  class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                            
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
