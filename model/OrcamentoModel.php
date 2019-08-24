<?php

include_once "Conexao.php";
class OrcamentoModel extends Conexao
{
    public function listarOrcamento()
    {
        $sql = "SELECT * FROM orcamento WHERE status = 1";
        $statement = Conexao::prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }

}