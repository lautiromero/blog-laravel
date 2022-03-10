<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //modificamos la funcion nativa de model para que le asigne la key por el slug y no por el id
    
    //fillable autoriza los campos que se van a poder modificar mediante la 
    //asignacion masiva ej ->  Curso::create($request->all())
    /*     protected $fillable = ['name', 'description', 'category']; */

    //guarded proteje un o mas campos de la tabla para evitar hacer el fillable
    //protected $guarded = ['status'];

    //guarded vacio para no proteger ningun campo pero habilitar la asignacion masiva
    protected $guarded = [];
}
