@extends('plantillas.uno')
@section('titulo')
crear libro
@endsection
@section('cabecera')
Nuevo Libro
@endsection
@section('contenido')
    <div class="w-1/2 p-4 rounded-lg shadow-lg bg-gray-100 mx-auto">
        <x-form :action="route('libros.store')">
            <x-form-input name="titulo" label="Título" placeholder="Título" />
            <x-form-input name="resumen" label="Resumen" placeholder="Resumen" />
            <x-form-input type="number" step="0.01" min="0" max="99999" name="pvp" label="Precio"
                placeholder="Precio (€)" />
            <x-form-input name="stock" step="1" label="Stock" placeholder="Stock" />
            <x-form-select name="user_id" label="Nombre Autor" :options="$users"/>
            <div class="flex flex-row-reverse">
                <button type="submit" class="ml-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    <i class="fas fa-save"> Guardar</i>
                </button>
                <a href="{{ route('libros.index') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    <i class="fas fa-backward"> Volver</i>
                </a>
            </div>
        </x-form>
    </div>
@endsection
