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
                    <p class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">
                        {{ $curso->description }}
                    </p>
            </div>
        </div>
    </div>
@endsection
