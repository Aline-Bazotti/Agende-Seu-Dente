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
    public function addGrupo($grupoId, $grupoNome, $grupoPermissoes){
        try {
            $sql = $this->conexao->prepare("INSERT INTO grupo(id, nome, permissoes) VALUES (:grupoId, :grupoNome, :grupoPermissoes)");
            $sql->execute(array(
                ':grupoId'=>$grupoId,
                ':grupoNome' => $grupoNome,
                ':grupoPermissoes' =>$grupoPermissoes));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function delGrupo($grupoId){
        try {
            $sql = $this->conexao->prepare("DELETE FROM grupo WHERE id = :grupoId");
            $sql->execute(array(
                ':grupoId'=>$grupoId
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function editGrupo($grupoId,$grupoNome,$grupoPermissoes){
        try {
            $sql = $this->conexao->prepare("UPDATE grupo SET nome = :grupoNome, permissoes= :grupoPermissoes WHERE id = :grupoId");
            $sql->execute(array(
                ':grupoId'=>$grupoId,
                ':grupoNome' => $grupoNome,
                ':grupoPermissoes' =>$grupoPermissoes
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function buscarGrupoPorId($grupo_id)
    {
        try {
            $sql = $this->conexao->prepare("select * from grupo where id = :grupo_id");
            $sql->execute(array(
                ':grupo_id'=>$grupo_id
            ));
            $dados = $sql->fetch();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function buscarSite()
    {
        try {
            $sql = $this->conexao->prepare("select * from site where id = 1");
            $sql->execute();
            $dados = $sql->fetch();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
}