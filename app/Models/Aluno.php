<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\model;
class Aluno extends Model
{
    use HasFactory;


    protected $fillable = ['Nome','Disciplina','Filmes'];
}
