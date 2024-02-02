@extends('layouts.app')

@section('content')
    <div class="container">
        <p>Bienvenido</p>

        {{-- Mostrar mensaje de éxito --}}
        @if(Session::has('success'))
            <div id="success-message" class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
    </div>

    <script>
        // Desvanecer el mensaje después de 2 segundos
        setTimeout(function() {
            document.getElementById('success-message').style.display = 'none';
        }, 2000);
    </script>
@endsection
