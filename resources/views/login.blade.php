@extends('layouts.app')

@section('title', 'Accesso')

@section('content')
    <div class="container">
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <div class="form-container">
            <form action="{{ route('authenticate') }}" method="post">
                @csrf

                <h2>Sign in</h2>
                
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                </div>

                <div class="form-group">  
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>

                <div class="links">
                    
                    <a href="{{route('register')}}">Signup</a>
                </div>

                <button type="submit" class="btn btn-primary">Accedi</button>
            </form>
        </div>
    </div>
@endsection
@push('styles')
    <style>
body {
    background-color: #6a64f1;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.form-container {
    background-color: #0e0101;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 100%;
}

.form-container h2 {
    text-align: center;
    color: white;
    font-size: 58px;
    margin-bottom: 30px;
}

.form-group {
    margin-bottom: 25px;
}

.form-group label {
    display: block;
    font-weight: bold;
    color: white;
    margin-bottom: 10px;
}

.form-group input {
    width: 100%;
    padding: 14px;
    border: 2px solid #6a64f1;
    border-radius: 10px;
    font-size: 16px;
    transition: border-color 0.3s ease-in-out;
}

.form-group input:focus {
    border-color: #6a64f1;
}

.links {
    margin-bottom: 25px;
    text-align: center;
}

.links a {
    display: inline-block;
    margin: 0 15px;
    text-decoration: none;
    color: #ffffff;
    font-size: 14px;
    transition: color 0.3s;
}

.links a:hover {
    color: #cccccc;
}

.btn {
    width: 100%;
    padding: 14px;
    font-size: 18px;
    font-weight: bold;
    color: #ffffff;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn-primary {
    background-color: #6a64f1;
}

.btn-primary:hover {
    background-color: #5d57de;
}

.btn-black {
    background-color: #000000;
}

.btn-black:hover {
    background-color: #222222;
}

.btn-danger {
    background-color: #dc3545;
}

.btn-danger:hover {
    background-color: #c82333;
}

.alert {
    margin-bottom: 25px;
    padding: 10px;
    border-radius: 10px;
}

.alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border: 2px solid #f5c6cb;
}


    </style>
@endpush