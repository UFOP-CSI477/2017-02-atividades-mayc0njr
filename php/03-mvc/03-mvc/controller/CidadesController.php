<?php

namespace Controller;

use Model\Cidade;

class CidadesController {
    public function listar($estado){
        // Manipular os dados -> Modelo
        $cidade = new Cidade();
        // Recuperar dados
        $lista = $cidade->getCidades($estado);
        // Manipular dados
        // . . .

        // Invocar/retornar os dados para view.

        include 'view/cidades/lista.php';
    }
}
