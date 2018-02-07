<?php

// Includes - framework
include './model/Database.php';
include './model/Registro.php';
include './model/Equipamento.php';
include './controller/RegistrosController.php';
include './controller/EquipamentosController.php';

// Tratamento das rotas
use Controller\RegistrosController;
use Controller\EquipamentosController;

$page = $_GET['page'];
$name = $_GET['nome'];

// Definição das rotas

if( $page == 'registros'){
    $registroController = new RegistrosController();
    $registroController->listar();
}
else if( $page == 'admin'){
    $equipamentoController = new EquipamentosController();
    $equipamentoController->listar();
}
else if( $page == 'pesquisa'){
    $equipamentoController = new EquipamentosController();
    if($name)
        $equipamentoController->pesquisar($name);
    else
        $equipamentoController->listar();
}else if( $page = 'manutencoes'){
    $registroController = new RegistrosController();
    if($name){
        $registroController = new RegistrosController();
        $registroController->pesquisar($name);
    }
    else{
        $equipamentoController = new EquipamentosController();
        $equipamentoController->listar();
    }
}
else if( $page == 'relatorio'){
    $registroController = new RegistrosController();
    $registroController->relatar();
}

