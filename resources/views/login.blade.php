@extends('layouts.default')

@section('title', 'Login')

@section('content')
    <div class="flex flex-col items-center">
        <h1>Welcome Back</h1>
        <form action="/login" method="post" class="flex flex-col">
            @csrf
            <label for="email">Email address</label>
            <input type="text" name="email" placeholder="Email">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Login</button>
        </form>
    </div>
@endsection

