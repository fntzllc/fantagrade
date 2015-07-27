@extends('layouts.master')

@section('title', 'Register')

@section('content')
<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" placeholder="Name" value="{{ old('name') }}">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" type="password" name="password" placeholder="Password">
    </div>

    <div class="form-group">
        <label for="password_confirmation">Confirm Password</label>
        <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password">
    </div>

    <button type="submit" class="btn btn-primary">Register</button>
</form>
@endsection