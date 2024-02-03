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
      <th scope="col">Estado</th>
      <th scope="col">Acciones</th>
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

        <td class="text-center">
          <i class="ti ti-mail-forward" style="font-size: 24px;"></i>
        </td>

        <td>
          <button class="btn btn-sm @if ($contacto->estado == 1) btn-success @else btn-danger @endif">
            @if ($contacto->estado == 1)
              Revisado
            @else
              Revisar
            @endif
          </button>
        </td>
        <td>
          <a href="#" type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editar{{ $contacto->id }}">
            <i class="ti ti-edit"></i>
          </a>

          <a href="#" data-bs-toggle="modal" data-bs-target="#mensaje{{ $contacto->id }}" class="btn btn-info btn-sm">
              <i class="ti ti-mail-opened"></i>
          </a>
        </td>
      </tr>
      @endforeach
      @else
      <tr>
          <td class="text-center" colspan="14">No se encontraron mensajes registrados</td>
      </tr>
  @endif
  </tbody>
</table>

@foreach($contactos as $contacto)
<div class="modal fade" id="editar{{ $contacto->id }}" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitleId">
          Editar Contacto
        </h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <form method="POST" id="editar_contacto_form" action="{{ route('contacto.editar_contacto', $contacto->id) }}">
          @csrf
          @method('PUT')
          <div class="mb-3">
              <label for="estado" class="form-label">Estado:</label>

              @if ($contacto->estado == 0)
                  <select class="form-control" id="estado" name="estado" required>
                      <option value="0" selected>Pendiente</option>
                      <option value="1">Revisado</option>
                  </select>
              @else
                  <input type="text" class="form-control" id="estado" value="Revisado" name="estado" required readonly>
              @endif
          </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
              Cerrar
            </button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach

@foreach($contactos as $contacto)
<div class="modal fade" id="mensaje{{ $contacto->id }}" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">
                    Ver mensaje
                </h5>
                <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                <span>{{ $contacto->message}}</span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Cerrar
                </button>
            </div>
        </div>
    </div>
</div>
@endforeach



<script>
  var modalId = document.getElementById('modalId');

  modalId.addEventListener('show.bs.modal', function (event) {
      let button = event.relatedTarget;
      let recipient = button.getAttribute('data-bs-whatever');
  });
</script>

@endsection