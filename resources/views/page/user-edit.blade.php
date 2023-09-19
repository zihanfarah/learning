@extends('layout.master')

@section('title', 'Register') 

@section('content')
    @if($errors -> any())
     {{ dd($errors)}}

    @endif
    <form action="{{ route('update', $user)}}" method="POST"> 
    @csrf
    @method('PUT')
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Input</h6>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="name" id="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="birth" class="form-label">Birthday</label>
                <input type="date" class="form-control" id="birth" name="birth" value="{{ $user->profile->birth }}">
            </div>
            <div class="mb-3">
                <label for="sex" class="form-label">Sex</label>
                <select name="sex" id="sex" class="form-select" aria-label="">
                    <option value="Male"{{ $user->profile->sex === 'Male' ? 'selected' : ''  }} >Male</option>
                    <option value="Female"{{ $user->profile->sex === 'Female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>
        </div>
        <button class="btn btn-primary w-5 mx-50" type="submit">Update</button>
    </form>
@endsection