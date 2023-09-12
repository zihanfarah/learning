@extends('layout.master')

@section('title', 'Login') 

@section('content')
    <form action="{{ route('authenticate') }}" method="POST"> 
        {{-- {{ route('form.submit') }} --}}
    @csrf
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Login</h6>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" id="email" name="email" class="form-control" id="email" placeholder="Enter your email here">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" id="password">
            </div>
        </div>
        <button class="btn btn-primary w-5 mx-50" type="submit">Login</button>
    </form>
@endsection