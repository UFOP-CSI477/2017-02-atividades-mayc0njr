<?php

namespace Model;

class Registro {

    public function getRegistros($coluna='datalimite'){
        $sql = "SELECT * FROM registros ORDER BY $coluna";

        $registros = \Model\Database::getInstance()->getDB()->query($sql);
        $rows = $registros->fetchAll();
        return $rows;
    }

    public function filterRegistros($equipamento, $coluna='datalimite'){
        if(!$equipamento)
            return getRegistros();
        $sql = "SELECT * FROM registros WHERE equipamento_id = $equipamento ORDER BY $coluna";

        $registros = \Model\Database::getInstance()->getDB()->query($sql);
        $rows = $registros->fetchAll();
        return $rows;
    }
    public function relatarRegistros($equipamento, $coluna='datalimite'){
        if(!$equipamento)
            return getRegistros();
        $sql = "SELECT * FROM registros WHERE equipamento_id = $equipamento ORDER BY $coluna";

        $registros = \Model\Database::getInstance()->getDB()->query($sql);
        $rows = $registros->fetchAll();
        return $rows;
    }
}
