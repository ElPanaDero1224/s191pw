@extends('plantillas.headFoot')

@section('contenido')

<div class="container my-5">
    <h2 class="text-center mb-4">Registrar Libro</h2>

    <form action="/formulario" method="POST" >
        @csrf
        <!-- ISBN -->
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN:</label>
            <input type="text" class="form-control" name="isbn" placeholder="Ingresa el ISBN" value="{{old('isbn')}}">
            <small class="text-danger">
                <i class="fas fa-exclamation-circle"></i> {{ $errors->first('isbn') }}
            </small>
        </div>

        <!-- Título -->
        <div class="mb-3">
            <label for="titulo" class="form-label">Título:</label>
            <input type="text" class="form-control" name="titulo" placeholder="Ingresa el título del libro" value="{{old('titulo')}}">
            <small class="text-danger">
                <i class="fas fa-exclamation-circle"></i> {{ $errors->first('titulo') }}
            </small>
        </div>

        <!-- Autor -->
        <div class="mb-3">
            <label for="autor" class="form-label">Autor:</label>
            <input type="text" class="form-control" name="autor" placeholder="Ingresa el autor" value="{{old('autor')}}">
            <small class="text-danger">
                <i class="fas fa-exclamation-circle"></i> {{ $errors->first('autor') }}
            </small>
        </div>

        <!-- Páginas -->
        <div class="mb-3">
            <label for="paginas" class="form-label">Páginas:</label>
            <input type="number" class="form-control" name="paginas" placeholder="Número de páginas" value="{{old('paginas')}}">
            <small class="text-danger">
                <i class="fas fa-exclamation-circle"></i> {{ $errors->first('paginas') }}
            </small>
        </div>

        <!-- Año de Publicación -->
        <div class="mb-3">
            <label for="anio" class="form-label">Año de Publicación:</label>
            <input type="number" class="form-control" name="anio" placeholder="Año de publicación" value="{{old('anio')}}">
            <small class="text-danger">
                <i class="fas fa-exclamation-circle"></i> {{ $errors->first('anio') }}
            </small>
        </div>

        <!-- Editorial -->
        <div class="mb-3">
            <label for="editorial" class="form-label">Editorial:</label>
            <input type="text" class="form-control" name="editorial" placeholder="Ingresa la editorial" value="{{old('editorial')}}">
            <small class="text-danger">
                <i class="fas fa-exclamation-circle"></i> {{ $errors->first('editorial') }}
            </small>
        </div>

        <!-- Email de Editorial -->
        <div class="mb-3">
            <label for="email" class="form-label">Email de Editorial:</label>
            <input type="email" class="form-control" name="email" placeholder="Correo electrónico de la editorial" value="{{old('email')}}">
            <small class="text-danger">
                <i class="fas fa-exclamation-circle"></i> {{ $errors->first('email') }}
            </small>
        </div>

        <!-- Botón de Enviar -->
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Registrar Libro</button>
        </div>

    </form>
</div>



@if(isset($datos))
<div class="container my-5">
    <h2 class="text-center mb-4">Datos del Libro Registrado</h2>

    <ul class="list-group">
        <li class="list-group-item"><strong>ISBN:</strong> {{ $datos['isbn']}}</li>
        <li class="list-group-item"><strong>Título:</strong> {{ $datos['titulo'] }}</li>
        <li class="list-group-item"><strong>Autor:</strong> {{ $datos['autor'] }}</li>
        <li class="list-group-item"><strong>Páginas:</strong> {{ $datos['paginas']}}</li>
        <li class="list-group-item"><strong>Año de Publicación:</strong> {{ $datos['anio']}}</li>
        <li class="list-group-item"><strong>Editorial:</strong> {{ $datos['editorial'] }}</li>
        <li class="list-group-item"><strong>Email:</strong> {{ $datos['email'] }}</li>
    </ul>

    <div class="d-grid mt-4">
        <a href="/" class="btn btn-primary">Volver</a>
    </div>
</div>
@else
<p class="text-center my-5">No hay resultados disponibles.</p>
@endif



@endsection
