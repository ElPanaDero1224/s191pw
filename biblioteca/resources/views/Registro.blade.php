@extends('plantillas.headFoot')

@section('contenido')

<div class="container my-5">
    <h2 class="text-center mb-4">Registrar Libro</h2>

    <form>
        <!-- ISBN -->
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN:</label>
            <input type="text" class="form-control" id="isbn" placeholder="Ingresa el ISBN">
        </div>

        <!-- Título -->
        <div class="mb-3">
            <label for="titulo" class="form-label">Título:</label>
            <input type="text" class="form-control" id="titulo" placeholder="Ingresa el título del libro">
        </div>

        <!-- Autor -->
        <div class="mb-3">
            <label for="autor" class="form-label">Autor:</label>
            <input type="text" class="form-control" id="autor" placeholder="Ingresa el autor">
        </div>

        <!-- Páginas -->
        <div class="mb-3">
            <label for="paginas" class="form-label">Páginas:</label>
            <input type="number" class="form-control" id="paginas" placeholder="Número de páginas">
        </div>

        <!-- Año de Publicación -->
        <div class="mb-3">
            <label for="anio" class="form-label">Año de Publicación:</label>
            <input type="number" class="form-control" id="anio" placeholder="Año de publicación">
        </div>

        <!-- Editorial -->
        <div class="mb-3">
            <label for="editorial" class="form-label">Editorial:</label>
            <input type="text" class="form-control" id="editorial" placeholder="Ingresa la editorial">
        </div>

        <!-- Email de Editorial -->
        <div class="mb-3">
            <label for="email" class="form-label">Email de Editorial:</label>
            <input type="email" class="form-control" id="email" placeholder="Correo electrónico de la editorial">
        </div>

        <!-- Botón de Enviar -->
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Registrar Libro</button>
        </div>
    </form>
</div>

@endsection
