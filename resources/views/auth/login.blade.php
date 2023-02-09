@extends('template')

@section('title')
    Login | Taxatio
@endsection

@section('body')
<div class="background-login">
    <img src="{{asset('/Asset/img/sfondologin2.jpg')}}" alt="immagine di sfondo hero login" class="z-1">
    <div class="sfondo-login-overlay z-15"></div>
    <div class="container-login z-20">
            <h1 class="mb-6">LOGIN</h1>
            <form method="POST" action="">
                @csrf
                <label for="email" class="block">email</label>
                <input type="text" id="email" name="email" class="input-text mb-4" required>
                <label for="password" class="block">password</label>
                <input type="password" id="password" name="password" class="input-text mb-12" minlength="8" required>

                <input type="submit" value="ACCEDI" class="block button-login">
            </form>
    </div>
</div>
@endsection
