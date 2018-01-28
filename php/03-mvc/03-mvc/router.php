<?php

// Includes - framework
include './model/Database.php';
include './model/Aluno.php';
include './model/Estado.php';
include './controller/AlunosController.php';
include './controller/EstadosController.php';

// Tratamento das rotas
use Controller\AlunosController;
use Controller\EstadosController;

$op = $_GET['op'];

// Definição das rotas

if( $op == 1){
    $alunoController = new AlunosController();
    $alunoController->listar();
}
else if( $op == 2){
    $estadoController = new EstadosController();
    $estadoController->listar();
}
