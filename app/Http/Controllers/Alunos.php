<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\Aluno;
use Illuminate\Support\facades\DB;

class Alunos extends Controller
{
    function index () {
$data= DB::table('alunos')->get();
return view('user',['data'=>$data]);


    
    }
}