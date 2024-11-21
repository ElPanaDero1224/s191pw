@extends('layouts.plantilla1')

<script>
    function confirmarEliminacion(id) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "No podrás revertir esto.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(`form-eliminar-${id}`).submit();
            }
        });
    }
</script>

@section('titulo', 'Clientes')

@section('contenido')

    {{-- Inicia tarjetaCliente --}}
    
<div class="container mt-5 col-md-8">


    {{-- $variable as $llave --}}
    @foreach ($consultaClientes as $cliente)
        
    <div class="card text-justify font-monospace mt-3">
        <div class="card-header fs-5 text-primary">
            {{$cliente->nombre}}
        </div>
        <div class="card-body">
            <h5 class="fw-bold">{{ $cliente->correo }}</h5>
            <h5 class="fw-medium">{{ $cliente->telefono }}</h5>
            <p class="card-text fw-lighter"></p>
        </div>
        <div class="card-footer text-muted">
            <a href="{{ route('rutaActualizar', $cliente->id) }}" class="btn btn-warning btn-sm">{{__('Actualizar')}}</a>
            
        <form id="form-eliminar-{{ $cliente->id }}" action="{{ route('rutaEliminar', $cliente->id) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
        <button type="button" class="btn btn-danger btn-sm" onclick="confirmarEliminacion({{ $cliente->id }})">
            {{ __('Eliminar') }}
        </button>


        </div>
    </div>

    @endforeach

</div> {{-- divcontainer --}}
{{-- Finaliza tarjetaCliente --}}

@endsection