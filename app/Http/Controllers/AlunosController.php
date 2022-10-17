<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\Aluno;

class AlunosController extends Controller
{
    function show () {
return Aluno::all();


    }
}
