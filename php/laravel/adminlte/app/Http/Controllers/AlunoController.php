<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;

class AlunoController extends Controller
{
    public function listar(){
        // Acesso ao modelo e recuperação dos dados.
        $alunos = Aluno::all();

        // Invocar a view passando os dados.
        return view('alunos.listar')->with('alunos', $alunos);
    }
}
