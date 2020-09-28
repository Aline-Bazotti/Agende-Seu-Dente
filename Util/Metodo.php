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
            $dados = $sql->fetchAll();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function buscarInstitucional()
    {
        try {
            $sql = $this->conexao->prepare("select * from institucional where status=1");
            $sql->execute();
            $dados = $sql->fetchAll();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function buscarInstitucionalInicial()
    {
        try {
            $sql = $this->conexao->prepare("select * from institucional where inicial=1 and status=1");
            $sql->execute();
            $dados = $sql->fetchAll();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function buscarTodosBanners()
    {
        try {
            $sql = $this->conexao->prepare("select * from banner where status=1 order by ordem");
            $sql->execute();
            $dados = $sql->fetchAll();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function buscarUsuarios()
    {
        try {
            $sql = $this->conexao->prepare("select * from usuario");
            $sql->execute();
            $dados = $sql->fetchAll();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function buscarGrupos()
    {
        try {
            $sql = $this->conexao->prepare("select * from grupo");
            $sql->execute();
            $dados = $sql->fetchAll();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function buscarServicos()
    {
        try {
            $sql = $this->conexao->prepare("select * from servicos where status=1");
            $sql->execute();
            $dados = $sql->fetchAll();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function buscarServicosInicial()
    {
        try {
            $sql = $this->conexao->prepare("select * from servicos where inicial=1 and status=1");
            $sql->execute();
            $dados = $sql->fetchAll();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
}