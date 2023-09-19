@extends('layout.master')

@section('title', 'Register') 

@section('content')
    <form action="{{ route('register')}}" method="POST"> 
    @csrf
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Input</h6>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="name" id="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name')}}" placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email')}}" placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="birth" class="form-label">Birthday</label>
                <input type="date" class="form-control" id="birth" name="birth" value="{{ old('birth')}}">
            </div>
            <div class="mb-3">
                <label for="sex" class="form-label">Sex</label>
                <select name="sex" id="sex" class="form-select" aria-label="Default select example">
                    <option value="{{ __("Male") }}">Male</option>
                    <option value="{{ __("Female") }}">Female</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="{{ old('password')}}" id="password" placeholder="Enter your password">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label" id="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="password" placeholder="Confirm your password">
            </div>
        </div>
        <button class="btn btn-primary w-5 mx-50" type="submit">Sign Up</button>
    </form>
@endsection