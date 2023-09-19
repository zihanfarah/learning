@extends('layout.master')

@section('title', 'Single User')

@section('content')
<div class="card">
    <div class="card-body">
      <h3 class="card-title">{{ $user -> name }}</h3>
      <h5 class="card-subtitle mb-2 text-muted">{{ $user -> email }}</h5>
      <p class="">{{ $user -> created_at }}</p>
      <p class="">{{ $user->profile->birth  }}</p>
      <p class="">{{ $user->profile->sex  }}</p>
      <br>
      <a class="btn btn-primary" href="{{ route('user')}}"> Kembali</a>
    </div>
  </div>
@endsection