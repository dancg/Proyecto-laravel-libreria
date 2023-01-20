@extends('plantillas.uno')
@section('titulo')
inicio libros
@endsection
@section('cabecera')
Listado Libros
@endsection
@section('contenido')
<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
        <div class="overflow-hidden">
            <div class="flex flex-row-reverse ">
                <a href="{{route('libros.create')}}" class="mb-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                <i class="fas fa-add"> Nuevo</i></a>
            </div>
          <table class="min-w-full">
            <thead class="bg-white border-b">
              <tr>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Info
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Titulo
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Autor
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Acciones
                </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($libros as $item)
              <tr class="bg-gray-100 border-b">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                    <a href="{{route('libros.show', $item)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        <i class="fas fa-info"></i>
                    </a>
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  {{$item->titulo}}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  {{$item->user->name}}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <form method="POST" action="{{route('libros.destroy', $item)}}">
                    @csrf
                    @method('DELETE')
                    <a href="{{route('libros.edit', $item)}}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                      <i class="fas fa-edit"></i>
                    </a>
                    <button type="submit" class="ml-2 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                      <i class="fas fa-trash"></i>
                    </button>
                  </form>
                </td>
                @endforeach
              </tr>
            </tbody>
          </table>
          <div class="mt-2">
            {{$libros->links()}}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('js')
@if (session('mensaje'))
<script>
    Swal.fire({
        icon: 'success',
        title: '{{ session('mensaje') }}',
        showConfirmButton: false,
        timer: 1500
    })
</script>
@endif
@endsection