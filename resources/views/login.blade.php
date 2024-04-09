@extends('layouts.app')

@section('title', 'Accesso')

@section('content')
    <h1>Accesso</h1>

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('authenticate') }}" method="post">
        @csrf
        <div class="login-box">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
        </div>
        <div class="login-box">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Accedi</button>
    </form>
@endsection


