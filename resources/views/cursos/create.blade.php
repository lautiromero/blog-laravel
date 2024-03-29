@extends('layouts.plantilla')

@section('title', 'Cursos create')

@section('content')
    <h1>Esta es la pagina para crear un curso</h1>

    <form action="{{route('cursos.store')}}" method="POST">

        @csrf

        <label>
            Nombre: 
            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Descripcion:
            <br>
            <textarea name="description" rows="5">{{old('description')}}</textarea>
        </label>

        @error('description')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="category" value="{{old('category')}}">
        </label>
        
        @error('category')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection()