@extends('layouts.app')

@section('content')
    <div class="container">
        <p>Bienvenido</p>

        @if(Session::has('success_login') && !session('success_login_displayed'))
            <div id="success-login-message" class="alert alert-success">
                {{ Session::get('success_login') }}
            </div>

            @php
                // Marcar el mensaje como mostrado para evitar su aparición en recargas
                session(['success_login_displayed' => true]);
            @endphp
        @endif
    </div>

    <script>
        // Desvanecer el mensaje después de 2 segundos
        var successLoginMessage = document.getElementById('success-login-message');

        if (successLoginMessage) {
            setTimeout(function() {
                successLoginMessage.style.display = 'none';
            }, 2000);
        }
    </script>
@endsection
