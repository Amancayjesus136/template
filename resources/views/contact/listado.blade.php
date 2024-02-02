@extends('layouts.app')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre de usuario</th>
      <th scope="col">Correo de consulta</th>
      <th scope="col">Asunto</th>
      <th scope="col">Mensaje</th>
    </tr>
  </thead>
  <tbody>
  @if ($contactos && count($contactos) > 0)
      @foreach($contactos as $contacto)
      <tr>
        <th scope="row">{{ $contacto->id }}</th>
        <td>{{ $contacto->name }}</td>
        <td>{{ $contacto->email }}</td>
        <td>{{ $contacto->subject }}</td>
        <td>{{ $contacto->message }}</td>
      </tr>
      @endforeach
      @else
      <tr>
          <td class="text-center" colspan="14">No se encontraron mensajes registrados</td>
      </tr>
  @endif
  </tbody>
</table>

@endsection