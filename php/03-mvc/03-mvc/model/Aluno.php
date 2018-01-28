<?php

namespace Model;

class Aluno {

    public function getAlunos(){
        $sql = "SELECT * FROM alunos ORDER BY nome";

        $alunos = \Model\Database::getInstance()->getDB()->query($sql);

        return $alunos;
    }
}
