<?php

namespace Controller;

use Model\Equipamento;

class EquipamentosController {
    public function listar(){
        // Manipular os dados -> Modelo
        $equipamento = new Equipamento();
        // Recuperar dados
        $lista = $equipamento->getEquipamentos();
        // Manipular dados
        // . . .

        // Substituindo numero da manutencao pelo tipo dela.
        // foreach ($lista as $key => $value) {
        //     $lista[$key]['tipo'] = $value['tipo'] == 1 ? 'Preventiva' : ($value['tipo'] == 2 ? 'Corretiva' : 'Urgente');
        // }

        // Invocar/retornar os dados para view.
        include 'view/admin/lista.php';
    }

    public function pesquisar($nome){
        // Manipular os dados -> Modelo
        $equipamento = new Equipamento();
        // Recuperar dados
        $lista = $equipamento->filterEquipamentos($nome);
        $hrefs = array();
        foreach ($lista as $key => $value) {
            array_push($hrefs, "router.php?page=manutencoes&nome=".$value['id']);
        }
        include 'view/admin/lista.php';
    }
}
