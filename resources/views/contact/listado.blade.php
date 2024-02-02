@extends('layouts.app')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contactos as $contacto)
    <tr>
      <th scope="row">{{ $contacto->id }}</th>
      <td>{{ $contacto->name }}</td>
      <td>{{ $contacto->email }}</td>
      <td>{{ $contacto->subject }}</td>
      <td>{{ $contacto->message }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection