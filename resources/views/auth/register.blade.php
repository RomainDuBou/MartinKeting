<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    body {
        font-family: 'Montserrat', sans-serif;
        color: black;
        background-color: #6b64f191;

    }

    .signin {
        background-color: #d3d3d3;
        color: #fff;
        font-size: 14px;
        letter-spacing: 1px;
    }

    .login {
        position: relative;
        height: 530px;
        width: 350px;
        margin: 0 auto;
        padding: 60px 60px;
        background: url(/images/whitey.jpg) no-repeat center center #505050;
        background-size: cover;
        box-shadow: 0px 30px 60px -5px #000;
        border-radius: 30px;
        margin-top: 90px;

    }

    form {
        padding-top: 80px;
    }

    .active {
        border-bottom: 2px solid #6a64f1;
    }

    .nonactive {
        color: rgba(255, 255, 255, 0.2);
    }

    h2 {
        margin-top: -60px;
        padding-left: 12px;
        font-size: 22px;
        text-transform: uppercase;
        padding-bottom: 5px;
        letter-spacing: 2px;
        display: inline-block;
        font-weight: 100;
        color: black
    }

    h2:first-child {
        padding-left: 0px;
    }

    .text {
        border: none;
        width: 89%;
        padding: 10px 20px;
        display: block;
        height: 15px;
        border-radius: 20px;
        background: rgba(255, 255, 255, 0.1);
        border: 2px solid rgba(255, 255, 255, 0);
        overflow: hidden;
        margin-top: 15px;
        transition: all 0.5s ease-in-out;
    }

    .text:focus {
        outline: 0;
        border: 2px solid rgb(255, 255, 255);
        border-radius: 20px;
        background: rgba(0, 0, 0, 0);
    }

    .text:focus+span {
        opacity: 0.6;
    }

    .inputContainer {
        margin-top: -50px;
    }

    input[type="email"],
    input[type="text"],
    input[type="password"] {
        font-family: 'Montserrat', sans-serif;
        color: black;
        background-color: #ffffffd3;
    
    }

    input {
        display: inline-block;
        padding-top: 20px;
        font-size: 14px;
    }

    h2,
    .custom-checkbox {
        margin-left: 20px;
    }

    label {
        display: inline-block;
        padding-top: 10px;
        padding-left: 5px;
    }


    span {
        text-transform: uppercase;
        font-size: 12px;
        opacity: 0.4;
        display: inline-block;
        position: relative;
        top: -73px;
        margin-bottom: 20px;
        transition: all 0.5s ease-in-out;
        background-color: #000;
        padding: 5px;
        border-radius: 10px;
        color: #fff;
    }

    .signin {
        background-color: #fff;
        color: #6a64f1;
        width: 100%;
        padding: 10px 20px;
        display: block;
        height: 39px;
        border-radius: 20px;
        transition: all 0.5s ease-in-out;
        border: none;
        text-transform: uppercase;
    }

    .signin:hover {
        background: #6a64f1;
        color: #fff;
        box-shadow: 0px 4px 35px -5px #6a64f1;
        cursor: pointer;
    }

    .signin:focus {
        outline: none;
    }

    hr {
        border: 1px solid rgba(255, 255, 255, 0.1);
        top: 85px;
        position: relative;
    }

    a {
        text-align: center;
        display: block;
        top: 25px;
        position: relative;
        text-decoration: none;
        color: rgba(255, 255, 255, 0.2);
        color: black
    }

    .alert {
        position: absolute;
        background-color: #6a64f1;
        color: #fff;
        border-radius: 50px;
        padding: 20px;
        left: 70%;
    }
</style>

<body>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            ❌ Erreur(s) :
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="login">
        <h2 class="active">S'inscrire</h2>
    
        <form action="{{ route('user.store') }}" method="post">
            @csrf
            <div class="inputContainer">
                <div class="form-group">
                    <input type="text" name="name" id="name" class="text" value="{{ old('name') }}"
                        required>
                    <span>Nom</span>
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" class="text" value="{{ old('email') }}"
                        required>
                    <span>Email</span>
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" class="text" required>
                    <span>Mot de passe</span>
                </div>
                <div class="form-group">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="text"
                        required>
                    <span>Confirmez le mot de passe</span>
                </div>
            </div>
            <button type="submit" class="signin">S'inscrire</button>
        </form>
        <a href="{{route('login')}}">Déjà un compte ? Se connecter</a>
    </div>

</body>

</html>
