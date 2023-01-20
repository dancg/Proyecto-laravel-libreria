@extends('plantillas.uno')
@section('titulo')
    info libro
@endsection
@section('cabecera')
    Detalles del Libro
@endsection
@section('contenido')
    <div class="flex justify-center">
        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">
                <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">
                    Titulo:</h5>
                {{ $libro->titulo }}</h5>
            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">
                Resumen:</h5>
            <p class="text-gray-700 text-base mb-4">
                {{ $libro->resumen }}
            </p>
            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">
                Precio (€):</h5>
            <p class="text-gray-700 text-base mb-4">
                {{ $libro->pvp }}
            </p>
            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">
                Stock:</h5>
            <p class="text-gray-700 text-base mb-4">
                {{ $libro->stock }}
            </p>
            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">
                Nombre del autor:</h5>
            <p class="text-gray-700 text-base mb-4">
                {{ $libro->user->name }}
            </p>
            <a href="{{ route('libros.index') }}"
                class=" ml-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                <i class="fas fa-backward"> Volver</i>
            </a>
        </div>
    </div>
@endsection
