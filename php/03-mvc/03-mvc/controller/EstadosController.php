<?php

namespace Controller;

use Model\Estado;

class EstadosController {
    public function listar(){
        // Manipular os dados -> Modelo
        $estado = new Estado();
        // Recuperar dados
        $lista = $estado->getEstados();
        // Manipular dados
        // . . .

        // Invocar/retornar os dados para view.

        include 'view/estados/lista.php';
    }
}
