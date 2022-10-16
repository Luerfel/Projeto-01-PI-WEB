<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\aluno;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');

});


Route::get('/buscar_aluno/{id_do_aluno}',function($id_do_aluno){
    Aluno::create([
        'Nome' => $criaraluno->Nome_aluno,
        'Disciplina' => $criaraluno->Disciplina_aluno
    ]);
echo "Aluno Cadastrado com Sucesso!";
});
