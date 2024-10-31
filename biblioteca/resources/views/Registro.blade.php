@extends('plantillas.headFoot')

@section('contenido')

<div class="container my-5">
    <h2 class="text-center mb-4">{{__('Registrar Libro')}}</h2>

    <form action="/formulario" method="POST" >
        @csrf
        <!-- ISBN -->
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN:</label>
            <input class="form-control" name="isbn" placeholder="{{__('Ingresa el ISBN')}}" value="{{old('isbn')}}">
            <small class="text-danger">
                <i class="fas fa-exclamation-circle"></i> {{ $errors->first('isbn') }}
            </small>
        </div>

        <!-- Título -->
        <div class="mb-3">
            <label for="titulo" class="form-label">{{__('Título')}}:</label>
            <input class="form-control" name="titulo" placeholder="{{__('Ingresa el título del libro')}}:" value="{{old('titulo')}}">
            <small class="text-danger">
                <i class="fas fa-exclamation-circle"></i> {{ $errors->first('titulo') }}
            </small>
        </div>

        <!-- Autor -->
        <div class="mb-3">
            <label for="autor" class="form-label">{{__('Autor')}}:</label>
            <input class="form-control" name="autor" placeholder="{{__('Ingresa el autor')}}" value="{{old('autor')}}">
            <small class="text-danger">
                <i class="fas fa-exclamation-circle"></i> {{ $errors->first('autor') }}
            </small>
        </div>

        <!-- Páginas -->
        <div class="mb-3">
            <label for="paginas" class="form-label">{{__('Páginas')}}:</label>
            <input class="form-control" name="paginas" placeholder="{{__('Ingresa el número de páginas')}}" value="{{old('paginas')}}">
            <small class="text-danger">
                <i class="fas fa-exclamation-circle"></i> {{ $errors->first('paginas') }}
            </small>
        </div>

        <!-- Año de Publicación -->
        <div class="mb-3">
            <label for="anio" class="form-label">{{__('Año de Publicación')}}:</label>
            <input class="form-control" name="anio" placeholder="{{__('Ingresa el año de publicación')}}" value="{{old('anio')}}">
            <small class="text-danger">
                <i class="fas fa-exclamation-circle"></i> {{ $errors->first('anio') }}
            </small>
        </div>

        <!-- Editorial -->
        <div class="mb-3">
            <label for="editorial" class="form-label">{{__('Editorial')}}:</label>
            <input class="form-control" name="editorial" placeholder="{{__('Ingresa la editorial')}}" value="{{old('editorial')}}">
            <small class="text-danger">
                <i class="fas fa-exclamation-circle"></i> {{ $errors->first('editorial') }}
            </small>
        </div>

        <!-- Email de Editorial -->
        <div class="mb-3">
            <label for="email" class="form-label">{{__('Email de Editorial')}}:</label>
            <input class="form-control" name="email" placeholder="{{__('Ingresa el email de la editorial')}}" value="{{old('email')}}">
            <small class="text-danger">
                <i class="fas fa-exclamation-circle"></i> {{ $errors->first('email') }}
            </small>
        </div>

        <!-- Botón de Enviar -->
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">{{__('Registrar Libro')}}</button>
        </div>

    </form>
</div>



@if(isset($datos))
<div class="container my-5">
    <h2 class="text-center mb-4">{{__('Datos del Libro Registrado')}}</h2>

    <ul class="list-group">
        <li class="list-group-item"><strong>ISBN:</strong> {{ $datos['isbn']}}</li>
        <li class="list-group-item"><strong>{{__('Título')}}:</strong> {{ $datos['titulo'] }}</li>
        <li class="list-group-item"><strong>{{__('Autor')}}:</strong> {{ $datos['autor'] }}</li>
        <li class="list-group-item"><strong>{{__('Páginas')}}:</strong> {{ $datos['paginas']}}</li>
        <li class="list-group-item"><strong>{{__('Año de Publicación')}}:</strong> {{ $datos['anio']}}</li>
        <li class="list-group-item"><strong>{{__('Editorial')}}:</strong> {{ $datos['editorial'] }}</li>
        <li class="list-group-item"><strong>{{__('Email')}}:</strong> {{ $datos['email'] }}</li>
    </ul>

    <div class="d-grid mt-4">
        <a href="/" class="btn btn-primary">Volver{{__('Registrar Libro')}}</a>
    </div>

<script>
    alertify.alert(
        "{{__('Todo correcto: Libro')}} \"{{ $datos['titulo'] }}\" {{__('guardado')}}", 
        function() {
            alertify.message('OK');
        }
        );
</script>
    

</script>
</div>

@else
<p class="text-center my-5">{{__('No hay resultados disponibles.')}}</p>
@endif


<section>

</section>



@endsection
