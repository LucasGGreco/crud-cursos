<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class cursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::orderBy('id', 'desc')->paginate(8);

        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'costo' => 'required',
            'imagen' => 'required',
            'inicio' => 'required',
            'fin' => 'required',
            'horaInicio' => 'required',
            'horas' => 'required',
            'numAlumnos' => 'required',
            'profesor' => 'required'
        ]);

        $curso = new Curso();

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->costo = $request->costo;

        if ($request->hasFile("imagen")) {
            $imagen = $request->file("imagen");
            $nombreimagen = Str::slug($request->name) . "." . $imagen->guessExtension();
            $ruta = public_path("img/post/");
            $imagen->move($ruta, $nombreimagen);
            $curso->imagen = $nombreimagen;
        }

        $curso->inicio = $request->inicio;
        $curso->fin = $request->fin;
        $curso->horaInicio = $request->horaInicio;
        $curso->horas = $request->horas;
        $curso->numAlumnos = $request->numAlumnos;
        $curso->profesor = $request->profesor;

        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }

    public function show(Curso $curso)
    {

        return view('cursos.show', compact('curso'));
    }


    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso)
    {

        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'costo' => 'required',
            'inicio' => 'required',
            'fin' => 'required',
            'horaInicio' => 'required',
            'horas' => 'required',
            'numAlumnos' => 'required',
            'profesor' => 'required'
        ]);

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->costo = $request->costo;

        if ($request->hasFile("imagen")) {
            $imagen = $request->file("imagen");
            $nombreimagen = Str::slug($request->name) . "." . $imagen->guessExtension();
            $ruta = public_path("img/post/");
            $imagen->move($ruta, $nombreimagen);
            $curso->imagen = $nombreimagen;
        }

        $curso->inicio = $request->inicio;
        $curso->fin = $request->fin;
        $curso->horaInicio = $request->horaInicio;
        $curso->horas = $request->horas;
        $curso->numAlumnos = $request->numAlumnos;
        $curso->profesor = $request->profesor;

        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()->route('cursos.index');
    }
}
