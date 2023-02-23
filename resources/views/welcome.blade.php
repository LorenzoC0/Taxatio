@extends('template')

@section('title')
    Home TAXATIO
@endsection

@section('body')

    <div class="background-homepage">
        <img src="{{asset('/Asset/img/sfondologin2.jpg')}}" alt="immagine di sfondo hero login" class="z-1">
        <div class="sfondo-login-overlay z-15"></div>
        
        <div class="container-home">
            <h1><i>Benvenuto in</i></h1>
            <img src="{{asset('/Asset/img/logoTaxatio.png')}}" alt="Logo Taxatio">  
        </div>
        
        <div class="testo-home">
            <p>La nostra applicazione per valutare i docenti! Siamo molto colorati e propositivi</p>
        </div>
        
        <div class="pulsanti-home">
            <div class="pulsanti-assoluti">
                <a href="/login" class="inline-block text-center"><div class="pulsante-accedi">Accedi</div></a>
                <a href="/register" class="inline-block text-center"><div class="pulsante-registrati">Registrati</div></a>
            </div>
        </div>


    </div>
@endsection