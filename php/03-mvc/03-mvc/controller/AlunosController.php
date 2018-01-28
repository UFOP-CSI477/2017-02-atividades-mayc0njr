<?php

namespace Controller;

use Model\Aluno;

class AlunosController {
    public function listar(){
        // Manipular os dados -> Modelo
        $aluno = new Aluno();
        // Recuperar dados
        $lista = $aluno->getAlunos();
        // Manipular dados
        // . . .

        // Invocar/retornar os dados para view.

        include 'view/alunos/lista.php';
    }
}
