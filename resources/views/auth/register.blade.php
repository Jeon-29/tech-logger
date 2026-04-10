@extends('layouts.app')

@section('title', 'Register')

@section('content')
<h3 class="text-black text-center mb-4">Create Account</h3>
<form action="/register" method="POST">
    @csrf
    <div class="mb-3">
        <input type="text" name="name" class="form-control" placeholder="Name" required>
    </div>
    <div class="mb-3">
        <input type="email" name="email" class="form-control" placeholder="Email Address" required>
    </div>
    <div class="mb-3">
        <input type="password" name="password" class="form-control" placeholder="Create Password" required>
    </div>

    <div class="mb-3">
        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
    </div>
    <button type="submit" class="btn btn-light w-100 fw-bold py-3 rounded-4 shadow-sm">Create Account</button>
</form>
<div class="text-center mt-4">
    <a href="/login" class="link text-black small">Already have an account? Login</a>
</div>
@endsection