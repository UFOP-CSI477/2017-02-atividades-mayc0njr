<?php
    if(isset($_POST["nome"])){
        extract($_POST);
    }else{
        extract($_POST);
    }
    echo "<h1>SEJA BEM VINDO $nome DA SENHA $senha</h1>";
?>