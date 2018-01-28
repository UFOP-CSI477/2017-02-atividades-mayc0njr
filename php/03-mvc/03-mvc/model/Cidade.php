<?php

namespace Model;

class Cidade {

    public function getCidades($estado){
        $sql = "SELECT * FROM cidades as c WHERE c.estado_id = $estado ORDER BY nome";

        $php = \Model\Database::getInstance()->getDB()->query($sql);

        return $php;
    }
}
