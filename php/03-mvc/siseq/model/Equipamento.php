<?php

namespace Model;

class Equipamento {

    public function getEquipamentos($coluna='nome'){
        $sql = "SELECT * FROM equipamentos ORDER BY $coluna";

        $equipamentos = \Model\Database::getInstance()->getDB()->query($sql);
        $rows = $equipamentos->fetchAll();
        return $rows;
    }
    public function filterEquipamentos($nome, $coluna='nome'){
        $sql = "SELECT * FROM equipamentos WHERE nome LIKE '%{$nome}%' ORDER BY $coluna";

        $equipamentos = \Model\Database::getInstance()->getDB()->query($sql);
        $rows = $equipamentos->fetchAll();
        return $rows;
    }
}
