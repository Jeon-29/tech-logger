@extends('layouts.app')

@section('title', 'Login')

@section('content')
<h3 class="text-black text-center mb-4">Welcome Back</h3>
<form action="/login" method="POST">
    @csrf
    <div class="mb-3">
        <input type="email" name="email" class="form-control" placeholder="Email Address" required>
    </div>
    <div class="mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
    </div>
    <button type="submit" class="btn btn-light w-100 fw-bold py-3 rounded-4 shadow-sm">Login</button>
</form>
<div class="text-center mt-4">
    <a href="/register" class="link text-black small opacity-75">Create an account</a>
</div>
@endsection