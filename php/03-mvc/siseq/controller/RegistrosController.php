<?php

namespace Controller;

use Model\Registro;

class RegistrosController {
    public function listar(){
        // Manipular os dados -> Modelo
        $registro = new Registro();
        // Recuperar dados
        $lista = $registro->getRegistros();
        // Manipular dados
        // . . .

        // Substituindo numero da manutencao pelo tipo dela.
        foreach ($lista as $key => $value) {
            $lista[$key]['tipo'] = $value['tipo'] == 1 ? 'Preventiva' : ($value['tipo'] == 2 ? 'Corretiva' : 'Urgente');
        }

        // Invocar/retornar os dados para view.
        include 'view/registros/lista.php';
    }

    public function pesquisar($equip){
        // Manipular os dados -> Modelo
        $registro = new Registro();
        // Recuperar dados
        $lista = $registro->filterRegistros($equip);
        include 'view/admin/lista2.php';
    }

    public function relatar($equip){
        // Manipular os dados -> Modelo
        $registro = new Registro();
        // Recuperar dados
        $lista = $registro->filterRegistros($equip);
        include 'view/admin/lista2.php';
    }
}
