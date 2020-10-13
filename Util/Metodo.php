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
    public function addEvento($nome,$cpf_cpnj,$data_nascimento,$dor,$desc,$quanto_tempo,$gestante,$semanas){
        try {
            $sql = $this->conexao->prepare("
            INSERT INTO solicitacao_horario(nome, cpf_cnpj, descricao, data_nascimento, sente_dor, quanto_tempo, gravidez, gravida_sim_semanas) 
            VALUES (:nome, :cpf_cpnj, :descricao, :data_nascimento, :dor, :quanto_tempo, :gestante, :semanas)");
            $sql->execute(array(
                ':nome'=>$nome,
                ':cpf_cpnj' => $cpf_cpnj,
                ':descricao' => $desc,
                ':data_nascimento' =>$data_nascimento,
                ':dor' => $dor,
                ':quanto_tempo' => $quanto_tempo,
                ':gestante' => $gestante,
                ':semanas' => $semanas
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function horarioMarcado($id)
    {
        try {
            $sql = $this->conexao->prepare("UPDATE solicitacao_horario SET marcado = 1 WHERE id = :id");
            $sql->execute(array(
                ':id'=>$id
            ));
            $dados = $sql->fetch();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function buscarSolicitacaoUsuario()
    {
        try {
            $sql = $this->conexao->prepare("select * from solicitacao_horario where marcado = 0");
            $sql->execute();
            $dados = $sql->fetchAll();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function apagarHorario($id){
        try {
            $sql = $this->conexao->prepare("DELETE FROM solicitacao_horario WHERE id = :id");
            $sql->execute(array(
                ':id'=>$id
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function addUsuario($nome,$cpf_cpnj,$data_nasc,$cro,$assinatura,$telefone,$telefone_s,$status,$email,$senha,$grupo){
        try {
            $sql = $this->conexao->prepare("INSERT INTO usuario(cpf,nome,data_nascimento,cro,telefone,telefone_s,status,email,senha,assinatura, id_grupo) VALUES 
            (:cpf, :nome, :data_nascimento, :cro,:telefone,:telefone_s,:status,:email,:senha,:assinatura, :id_grupo)");
            $sql->execute(array(
                ':cpf'=>$cpf_cpnj,
                ':nome' => $nome,
                ':data_nascimento' =>$data_nasc,
                ':cro' => $cro,
                ':telefone' => $telefone,
                ':telefone_s' => $telefone_s,
                ':status' => $status,
                ':email' => $email,
                ':senha' =>$senha,
                ':assinatura' => $assinatura,
                ':id_grupo' => $grupo
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function buscarUsuarioPorId($usuario_id)
    {
        try {
            $sql = $this->conexao->prepare("select * from usuario where id = :usuario_id");
            $sql->execute(array(
                ':usuario_id'=>$usuario_id
            ));
            $dados = $sql->fetch();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
}