@extends('template')

@section('title', 'Welcome')


@section('content')
    {{-- <h1>Hola desde la vista show de cursos - {{ $id }}</h1> --}}
    <div class="m-auto px-4 py-5 max-w-xl">
        <div class="bg-white shadow-2xl" >
            <div>
                <img src="https://images.unsplash.com/photo-1571171637578-41bc2dd41cd2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=20">
            </div>
            <div class="px-4 py-2 mt-2 bg-white">
                <h2 class="font-bold text-2xl text-gray-800">{{ $curso->name }}</h2>
                    <div class="grid grid-cols-6 gap-4">
                        <div class="col-start-1 col-end-7">
                            <p class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">
                                {{ $curso->description }}
                            </p>
                        </div>
                        <div class="col-end-12 col-span-1">
                            <a href="{{ route('curso.edit', $curso) }}" class="inline-block px-6 py-3 text-xs font-medium leading-1 text-right text-white uppercase transition bg-indigo-500 rounded shadow ripple hover:shadow-lg hover:bg-indigo-600 focus:outline-none">
                            Editar
                          </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
