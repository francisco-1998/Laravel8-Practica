<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Course;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Course::orderBy('id', 'DESC')->paginate();
        return view('courses.index', compact('cursos'));
    }

    public function create()
    {
        return view('courses.create');

    }

    public function store(StoreCurso $request)
    {
        //Forma 1 de guardar
        // $curso = new Course();
        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->category = $request->category;
        // $curso->save();


        //Forma 2 de guardar
        // $curso = Course::create([
        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'category' => $request->category,
        // ]);


        $curso = Course::create($request->all());

        return redirect()->route('curso.show', $curso);

    }

    public function show(Course $curso)
    {
        return view('courses.show', compact('curso'));

    }


    public function edit(Course $curso)
    {
        return view('courses.edit', compact('curso'));
    }

    public function update(Request $request, Course $curso)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required|min:10|max:200',
            'category' => 'required'
        ]);

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;
        $curso->save();
        return redirect()->route('curso.show', $curso);
    }
}
