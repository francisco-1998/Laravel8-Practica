@extends('template')

@section('title', 'Cursos')


@section('content')
<div class="container mx-auto py-5">
    <h1 class="text-2xl font-medium uppercase">Lista de cursos actuales</h1>
    <div class="pl-4">
        <ul>
            @foreach ($cursos as $item)
                <li>
                    <a href="{{ route('curso.show', $item)}}">{{ $item->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
<div class="pl-8 pr-8">
    {{ $cursos->links() }}
</div>
@endsection
