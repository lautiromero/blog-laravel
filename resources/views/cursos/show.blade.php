@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso->name)

@section('content')
    <h1>Bienvenido al curso de {{$curso->name}}</h1>

    <a href="{{route('cursos.index')}}">Volver a Cursos</a>

    {{-- Enviamos el curso por url pero laravel solo muestra el id --}}
    <a href="{{route('cursos.edit', $curso)}}">Editar curso</a>

    <p><strong>Categoría:</strong> {{$curso->category}}</p>
    <p>{{$curso->description}}</p>
    @endsection()