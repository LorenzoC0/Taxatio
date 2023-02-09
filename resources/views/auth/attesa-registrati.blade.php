@extends('template')

@section('title')
    Registrazione | Taxatio
@endsection

@section('body')
<div class="background-login">
    <img src="{{asset('/Asset/img/sfondologin2.jpg')}}" alt="immagine di sfondo hero login" class="z-1">
    <div class="sfondo-login-overlay z-15"></div>
    <div class="container-login-attesa z-20">
            <h1 class="mb-6">GRAZIE PER ESSERTI REGISTRATO!</h1>
            <p>Rimani in attesa per la verifica del tuo account</p>
            <!-- Non cancellare i /div qui sotto 😂 -->
            <div class="lds-default"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
    </div>
</div>
@endsection
