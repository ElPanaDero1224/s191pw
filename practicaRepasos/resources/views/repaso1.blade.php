<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <h1>Hola, soy repaso 1</h1>

    <div>
        <a href="/" class="btn btn-danger" role="button">Inicio</a>
    </div>


    <!-- De mb a gb -->
    <form action="{{ route('deMBaGB') }}" method="POST">
    @csrf
    <p1>Convertidor de MB a GB</p1>
    <div class="form-floating">
        <input type="number" class="form-control" id="dato" name="dato" placeholder="Ingresa los MB">
        <label for="dato">MB</label>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Convertir MB</button>
    </form>

    <!-- De gb a mb -->
    <form action="{{ route('deGBaMB') }}" method="POST">
    @csrf
    <p1>Convertidor de GB a MB</p1>
    <div class="form-floating">
        <input type="number" class="form-control" id="dato1" name="dato1" placeholder="Ingresa los GB">
        <label for="dato1">GB</label>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Convertir GB</button>
    </form>


    <!-- De Tb a Gb -->
    <form action="{{ route('deTBaGB') }}" method="POST">
    @csrf
    <p1>Convertidor de TB a GB</p1>
    <div class="form-floating">
        <input type="number" class="form-control" id="dato2" name="dato2" placeholder="Ingresa los TB">
        <label for="dato2">TB</label>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Convertir TB</button>
    </form>

        <!-- De gb a tb -->
    <form action="{{ route('deGBaTB') }}" method="POST">
    @csrf
    <p1>Convertidor de GB a TB</p1>
    <div class="form-floating">
        <input type="number" class="form-control" id="dato3" name="dato3" placeholder="Ingresa los GB">
        <label for="dato3">GB</label>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Convertir GB</button>
    </form>






    <h4>Resultado de la conversión</h4>
    <p>{{ isset($resultado) ? $resultado : 'No hay resultados disponibles.' }}</p>


</body>
</html>