<?php

namespace Model;

class Estado {

    public function getEstados(){
        $sql = "SELECT * FROM estados ORDER BY sigla";

        $estados = \Model\Database::getInstance()->getDB()->query($sql);
        $rows = $estados->fetchAll();
        return $rows;
    }
}
