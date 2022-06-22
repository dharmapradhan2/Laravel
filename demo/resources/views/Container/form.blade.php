@extends('home')
@push('title')
    <title>Add Page</title>
@endpush
@section('main-section')
<div class="container-sm mt-3">
    <form action="{{url('/')}}/add" method="post">
        @csrf
        <div class="text-center h3">Student Registration Page</div>
        <div class="mb-0 row">
            <label for="fname" class="col-xs-4 col-form-label">Full Name</label>
            <div class="col-xs-8">
                <input type="text" class="form-control form-control-sm" name="fname" id="fname"  placeholder="Enter fullName" value="{{old('fname')}}">
                <span class="text-danger small">@error('fname')
                    {{$message}}
                @enderror</span>
            </div>
        </div>
        <div class="mb-0 row">
            <label for="age" class="col-xs-4 col-form-label">Age</label>
            <div class="col-xs-8">
                <input type="number" class="form-control form-control-sm" min="17" name="age" id="age"   value="{{old('age')}}">
                <span class="text-danger">@error('age')
                    {{$message}}
                @enderror</span>
            </div>
        </div>
        <div class="mb-0 row">
            <label for="phno" class="col-xs-4 col-form-label">Phone Number</label>
            <div class="col-xs-8">
                <input type="tel" class="form-control form-control-sm" name="phno" value="{{old('phno')}}"  >
                <span class="text-danger">@error('phno' )
                    {{$message}}
                @enderror</span>
            </div>
        </div>
        <div class="mb-0 row">
            <label for="email" class="col-xs-4 col-form-label">Email</label>
            <div class="col-xs-8">
                <input type="email" class="form-control form-control-sm" name="email"   value="{{old('email')}}">
                <span class="text-danger">@error('email' )
                    {{$message}}
                @enderror</span>
            </div>
        </div>
        <div class="mb-2 row">
            <label for="class" class="col-xs-4 col-form-label">Class</label>
            <div class="col-xs-8">
                <input type="text" class="form-control form-control-sm" name="class"  value="{{old('class')}}" >
                <span class="text-danger">@error('class' )
                    {{$message}}
                @enderror</span>
            </div>
        </div>
        <div class="mb-1 row">
            <div class="offset-sm-4 col-sm-8">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection