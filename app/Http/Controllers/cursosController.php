<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cursosController extends Controller
{

    public function index(){
      $cursos=['TDD','Front end', 'rails'];
      return View('cursos', compact('cursos'));
    }
}
