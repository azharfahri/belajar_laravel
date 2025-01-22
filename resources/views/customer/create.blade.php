@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Data Customer</div>

                <div class="card-body">
                        <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                            <label class="form-label">Name Customer</label>
                            <input type="text" placeholder="Input Customer Name" name="name_customer" class="form-control" required>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Gender</label><br>
                            <input type="radio" class="form-check-input" name="gender" value="Male" > Male
                            <input type="radio" class="form-check-input" name="gender" value="Female" > Female 
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Contact</label>
                            <input type="number" placeholder="Input Contact Number" name="contact" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
