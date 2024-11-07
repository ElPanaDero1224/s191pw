<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <h1>Utiles Escolares</h1>

    

    <form action="{{ route('formulario') }}" method="POST">
        @csrf


        @if (session('exito'))
            <h5>{{session('exito')}}</h5>
        @endif

        <label for="nombre" class="f">Nombre:</label>
        <input type="text" name="nombre">
        <small class="text-danger fst-italic"> {{ $errors->first('nombre') }} </small>
        <label for="nombre" class="form-label">Marca:</label>
        <input type="text"  name="marca">
        <small class="text-danger fst-italic"> {{ $errors->first('marca') }} </small>
        <label for="nombre" class="form-label">Cantidad:</label>
        <input type="text"  name="cantidad">
        <small class="text-danger fst-italic"> {{ $errors->first('cantidad') }} </small>
        <button type="submit" class="btn btn-success ">Guardar Material</button>
    </form>
    
    
</body>
</html>