<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Aluno;
use app\Htpp\controllers\AlunosController;
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


Route::post('/cadastrar-aluno/',function(request $criaraluno){
    Aluno::create([
        'Nome' => $criaraluno->nome_aluno,
        'Disciplina' => $criaraluno->nome_disciplina,
        'Filmes' => $criaraluno->nome_filme
    ]);
echo "Aluno Cadastrado com Sucesso!";
});
route::get('/mostrar-aluno/{id_do_aluno}', function ($id_do_aluno){
$aluno = aluno::FindOrFail($id_do_aluno);
echo $aluno->Nome;
echo "<br / >";
echo $aluno->Disciplina;
});
Route::view('/criar-alunos', 'CriarAlunos');
Route::get('alunos', 'App\Http\Controllers\Alunos@index');
