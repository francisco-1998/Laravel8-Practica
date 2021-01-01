<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return 'Hola desde el index de CursoController';
    }

    public function create()
    {
        return 'Hola desde el create de CursoController';

    }

    public function show($id)
    {
        return "Hola desde el show de CursoController $id";

    }
}
