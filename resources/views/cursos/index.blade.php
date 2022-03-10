@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1>Welcome to the course home page</h1>
    
    <a href="{{route('cursos.create')}}">Crear nuevo curso</a>

    <ul>
    @foreach ($cursos as $curso)
        <li><a href="{{route('cursos.show', $curso)}}">{{$curso->name}}</a></li>
    @endforeach
    </ul>

    {{$cursos->links()}} 
    
@endsection()