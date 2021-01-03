@extends('template')

@section('title', 'Edit course')


@section('content')
<div class="grid min-h-screen place-items-center pt-3 bg-indigo-100">
    <div class="w-11/12 p-6 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12 shadow-md">
        <h1 class="text-xl font-semibold text-center">Editar curso</h1>
        <form class="mt-1" action="{{ route('curso.update', $curso) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="text" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Nombre del curso</label>
            <input id="name" type="text" name="name"
                class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" value="{{ $curso->name }}"/>

            <label for="text" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Descripcion del curso</label>
            <input id="description" type="text" name="description"
                class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"  value="{{ $curso->description }}" />

            <label for="text" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Categoria del curso</label>
            <input id="category" type="text" name="category"
                class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"  value="{{ $curso->category }}"/>

            

            <button type="submit"
                class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                Actualizar
            </button>
        </form>
    </div>
</div>
@endsection