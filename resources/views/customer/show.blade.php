@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show data customer</div>

                <div class="card-body">
                        <form action="{{ route('customer.show', $customer->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="mb-3">
                            <label class="form-label">Name customer</label>
                            <input type="text" placeholder="Input customer Name" value="{{ $customer->name_customer }}" name="name_customer" class="form-control" disabled>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Gender</label><br>
                            <input type="radio" disabled class="form-check-input" name="gender" value="Male" {{ $customer->gender == 'Male' ? 'checked' : '' }} > Male
                            <input type="radio" disabled class="form-check-input" name="gender" value="Female" {{ $customer->gender == 'Female' ? 'checked' : '' }} > Female 
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Contact</label>
                            <input type="number" placeholder="Input Contact Number" name="contact" value="{{ $customer->contact }}"  class="form-control" disabled>
                            </div>
                            <a href="{{ route('customer.index') }}" class="btn btn-danger">Back</a>
                            
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
