<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Course::paginate();
        return view('courses.index', compact('cursos'));
    }

    public function create()
    {
        return view('courses.create');

    }

    public function show(Course $curso)
    {
        return view('courses.show', compact('curso'));

    }
}
