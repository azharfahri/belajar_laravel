@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit data customer</div>

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
                        <form action="{{ route('customer.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                            <label class="form-label">Name customer</label>
                            <input type="text" placeholder="Input customer Name" value="{{ $customer->name_customer }}" name="name_customer" class="form-control" >
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Gender</label><br>
                            <input type="radio" class="form-check-input" name="gender" value="Male" {{ $customer->gender == 'Male' ? 'checked' : ''  }}> Male
                            <input type="radio" class="form-check-input" name="gender" value="Female" {{ $customer->gender  == 'Female' ? 'checked' : '' }} > Female 
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Contact</label>
                            <input type="number" placeholder="Input Contact Number" name="contact" value="{{ $customer->contact }}"  class="form-control" >
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                            
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
