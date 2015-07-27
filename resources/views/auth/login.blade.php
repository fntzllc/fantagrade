@extends('layouts.master')

@section('title', 'Login')

@section('content')
<form method="POST" action="/auth/login">
    {!! csrf_field() !!}

    <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Email">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" type="password" name="password" id="password" placeholder="Password">
    </div>

    <div class="checkbox">
        <label><input type="checkbox" name="remember"> Remember Me</label>
    </div>

    <button type="submit" class="btn btn-primary">Login</button>
</form>
@endsection