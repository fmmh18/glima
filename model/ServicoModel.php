<?php

include_once "Conexao.php";
class ServicoModel extends Conexao
{
    public function listarServico()
    {
        $sql = "SELECT * FROM categoria WHERE status = 1";
        $statement = Conexao::prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }

}