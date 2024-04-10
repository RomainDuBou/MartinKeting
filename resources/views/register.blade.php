@extends('layouts.app')

@section('title', 'Registrazione')

@section('content')
    <div class="logo-container">
        <img src="{{ asset('/image/MaRtinKeting_ultimo-removebg-preview.png') }}" alt="logo" class="rounded-image">
    </div>
<div class= "containerR">
    <h1>Bienvenue</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class="form-containerR">
    
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        
        <div class="form-register">
        <h2>Sign Up</h2>

            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>
        <div class="form-register">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
        </div>
        <div class="form-register">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrati</button>
    </form>
</div>
@endsection
@push('styles')
<style>
body{
    background: linear-gradient(
        to right,
        #6a64f1 0%,
        #6a64f1 50%,
        black 50%,
        black 100%
    );
}
.containerR{
    display: flex;
    justify-content: center;
    align-items: center;
   /*  height: 81vh; */
}
.form-containerR{
    background-color: #0e0101;
    padding: 14px;
    border-radius: 35px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    max-width: 375px;
    width: 100%;
    margin-top: -522px;
    margin-left: -3px;


}
.form-register h2{
    text-align: center;
    color: white;
    font-size: 58px;
    margin-bottom: 30px;
}
.form-register label{
    display: block;
    font-weight: bold;
    color: white;
    margin-bottom: 23px;

}
.form-register input{
  width: 100%;
    padding: 14px;
    border: 2px solid #6a64f1;
    border-radius: 10px;
    font-size: 16px;
    transition: border-color 0.3s ease-in-out;

}
.btn {
    width: 100%;
    padding: 14px;
    font-size: 18px;
    font-weight: bold;
    color: #ffffff;
    border: none;
    border-radius: 109px;
    cursor: pointer;
    transition: background-color 0.3s;
}
.btn-primary {
    background-color: #6a64f1;
    margin-top:40px
}

.btn-primary:hover {
    background-color: #5d57de;
}
.logo-container{
    position: absolute;
    top:-40px;
    right:858px;
    font-size: 20px;
    width: 20px; 
    height: 20px;"
}
.rounded-image{
    border radius:10px;
}
.containerR h1 {
    position: absolute; 
    top: 80px; 
    left: 20px; 
    font-size: 100px; 
    font-family: "Arial", sans-serif;
}


</style>

