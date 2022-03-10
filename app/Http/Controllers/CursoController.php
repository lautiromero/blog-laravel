<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use Illuminate\Http\Request;
use App\Models\Curso;
use Illuminate\Support\Str;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::orderBy('id', 'desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(StoreCurso $request)
    {

        /*  $curso = new Curso();

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        $curso->save(); */
        
        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso->id);
    }

    public function show(Curso $curso)
    {
        //en esta funcion creamos una instancia y recolectamos los datos por id
        //$curso = Curso::find($id);
        //retornamos la vista pasando por parametro el objeto curso
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso)
    {
        //en esta funcion casteamos el objeto que recibimos

        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso)
    {
        $request->validate([
            'name' => 'required|max:50',
            'description' => 'required',
            'category' => 'required'
        ]);

/*         $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        $curso->save(); */

        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso->id);
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()->route('cursos.index');
    }
}
