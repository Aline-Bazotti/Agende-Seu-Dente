<?php

require 'Base.php';

class Metodo extends Base
{
    public function buscarPacientePorId($id)
    {
        try {
            $sql = $this->conexao->prepare("select * from paciente where id = ?");
            $sql->execute($id);
            $dados = $sql->fetch();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    public function buscarTodosPacientes()
    {
        try {
            $sql = $this->conexao->prepare("select * from paciente");
            $sql->execute();
            $dados = $sql->fetch();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

}