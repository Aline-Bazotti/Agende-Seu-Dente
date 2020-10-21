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
    public function addPaciente($nome,$cpf_cpnj,$data_nasc,$nome_responsavel,$telefone,$telefone_s,$rg_ie,$nome_pai,$nome_mae,$email,$senha,$indicacao_dr,
                                $nome_empresa,$telefone_empresa,$profissao,$horario_trabalho,$cargo,$naturalidade,$nacionalidade,$estado_civil,$nome_conjuge,$sexo){
        try {
            $sql = $this->conexao->prepare("INSERT INTO paciente(nome,cpf_cnpj,email,senha,telefone,telefone_s,rg_ie,data_nascimento, nome_pai, 
            nome_mae, nome_responsavel, indicacao_dr,nome_empresa,telefone_empresa,profissao,horario_trabalho,cargo,naturalidade,nacionalidade,estado_civil,
            nome_conjuge,sexo) VALUES (:nome,:cpf_cnpj,:email,:senha,:telefone,:telefone_s,:rg_ie,:data_nascimento,:nome_pai,:nome_mae,:nome_responsavel,
            :indicacao_dr,:nome_empresa,:telefone_empresa,:profissao,:horario_trabalho,:cargo,:naturalidade,:nacionalidade,:estado_civil,:nome_conjuge,:sexo)");
            $sql->execute(array(
                ':nome' => $nome,
                ':cpf_cnpj'=>$cpf_cpnj,
                ':email' => $email,
                ':senha' =>$senha,
                ':telefone' => $telefone,
                ':telefone_s' => $telefone_s,
                ':rg_ie' => $rg_ie,
                ':data_nascimento' =>$data_nasc,
                ':nome_pai' => $nome_pai,
                ':nome_mae' => $nome_mae,
                ':nome_responsavel' => $nome_responsavel,
                ':indicacao_dr' => $indicacao_dr,
                ':nome_empresa' => $nome_empresa,
                ':telefone_empresa' => $telefone_empresa,
                ':profissao' => $profissao,
                ':horario_trabalho' => $horario_trabalho,
                ':cargo' => $cargo,
                ':naturalidade' => $naturalidade,
                ':nacionalidade' => $nacionalidade,
                ':estado_civil' => $estado_civil,
                ':nome_conjuge' => $nome_conjuge,
                ':sexo' => $sexo
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function editPacienteComSenha($id, $nome,$cpf_cpnj,$data_nasc,$cro,$assinatura,$telefone,$telefone_s,$status,$email,$senha,$grupo){
        try {
            $sql = $this->conexao->prepare("UPDATE paciente SET nome = :nome, cpf = :cpf_cpnj, data_nascimento = :data_nasc,cro = :cro,
            telefone = :telefone,telefone_s = :telefone_s,status = :status,email = :email,senha = :senha,assinatura = :assinatura, id_grupo = :id_grupo WHERE id = :id");
            $sql->execute(array(
                ':id'=>$id,
                ':cpf_cpnj'=>$cpf_cpnj,
                ':nome' => $nome,
                ':data_nasc' =>$data_nasc,
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
    public function editPaciente($id, $nome,$cpf_cpnj,$data_nasc,$cro,$assinatura,$telefone,$telefone_s,$status,$email,$grupo){
        try {
            $sql = $this->conexao->prepare("UPDATE paciente SET nome = :nome, cpf = :cpf_cpnj, data_nascimento = :data_nasc,cro = :cro,
            telefone = :telefone,telefone_s = :telefone_s,status = :status,email = :email,assinatura = :assinatura, id_grupo = :id_grupo WHERE id = :id");
            $sql->execute(array(
                ':id'=>$id,
                ':cpf_cpnj'=>$cpf_cpnj,
                ':nome' => $nome,
                ':data_nasc' =>$data_nasc,
                ':cro' => $cro,
                ':telefone' => $telefone,
                ':telefone_s' => $telefone_s,
                ':status' => $status,
                ':email' => $email,
                ':assinatura' => $assinatura,
                ':id_grupo' => $grupo
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function delPaciente($id){
        try {
            $sql = $this->conexao->prepare("DELETE FROM paciente WHERE id = :id");
            $sql->execute(array(
                ':id'=>$id
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function buscarTodosInstitucional()
    {
        try {
            $sql = $this->conexao->prepare("select * from institucional");
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
    public function buscarInstitucionalPorId($id)
    {
        try {
            $sql = $this->conexao->prepare("select * from institucional where id = :id");
            $sql->execute(array(
                ':id'=>$id
            ));
            $dados = $sql->fetch();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function editInstitucional($id,$desc,$texto,$status,$inicial){
        try {
            $sql = $this->conexao->prepare("UPDATE institucional SET descricao = :descricao, texto = :texto, status = :status, inicial = :inicial WHERE id = :id");
            $sql->execute(array(
                ':descricao'=>$desc,
                ':texto'=>$texto,
                ':status'=>$status,
                ':inicial'=>$inicial,
                ':id' => $id
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function editInstitucionalComImagem($id,$desc,$texto,$imagem,$status,$inicial){
        try {
            $sql = $this->conexao->prepare("UPDATE institucional SET descricao = :descricao, texto = :texto, imagem =:imagem, status = :status, inicial = :inicial WHERE id = :id");
            $sql->execute(array(
                ':descricao'=>$desc,
                ':texto'=>$texto,
                ':imagem' => $imagem,
                ':status'=>$status,
                ':inicial'=>$inicial,
                ':id' => $id
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function editInstitucionalStatus($id,$valor){
        try {
            $sql = $this->conexao->prepare("UPDATE institucional SET status = :valor WHERE id = :id");
            $sql->execute(array(
                ':valor'=>$valor,
                ':id' => $id
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function editInstitucionalInicial($id,$valor){
        try {
            $sql = $this->conexao->prepare("UPDATE institucional SET inicial = :valor WHERE id = :id");
            $sql->execute(array(
                ':valor'=>$valor,
                ':id' => $id
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function addInstitucional($desc,$texto,$imagem,$status,$inicial){
        try {
            $sql = $this->conexao->prepare("INSERT INTO institucional(descricao, texto, imagem, status, inicial) VALUES (:descricao, :texto, :imagem, :status,:inicial)");
            $sql->execute(array(
                ':descricao'=>$desc,
                ':texto' => $texto,
                ':imagem' =>$imagem,
                ':status' =>$status,
                ':inicial' =>$inicial
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function delInstitucional($id){
        try {
            $sql = $this->conexao->prepare("DELETE FROM institucional WHERE id = :id");
            $sql->execute(array(
                ':id'=>$id
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function buscarBanners()
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
    public function qtdBanners()
    {
        try {
            $sql = $this->conexao->prepare("select count(*) from banner where status=1 order by ordem");
            $sql->execute();
            $dados = $sql->fetch();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function buscarBannerPorId($id)
    {
        try {
            $sql = $this->conexao->prepare("select * from banner where id = :id");
            $sql->execute(array(
                ':id'=>$id
            ));
            $dados = $sql->fetch();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function buscarTodosBanners()
    {
        try {
            $sql = $this->conexao->prepare("select * from banner");
            $sql->execute();
            $dados = $sql->fetchAll();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function addBanner($titulo,$descricao,$botao,$imagem,$ordem,$status,$botaoLink){
        try {
            $sql = $this->conexao->prepare("INSERT INTO banner(titulo, descricao, botao, imagem, ordem, status, botaoLink) VALUES 
            (:titulo, :descricao, :botao,:imagem, :ordem, :status, :botaoLink)");
            $sql->execute(array(
                ':titulo'=>$titulo,
                ':descricao' => $descricao,
                ':botao' =>$botao,
                ':imagem' =>$imagem,
                ':ordem' =>$ordem,
                ':status' =>$status,
                ':botaoLink' =>$botaoLink
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function editBannerStatus($id,$valor){
        try {
            $sql = $this->conexao->prepare("UPDATE banner SET status = :valor WHERE id = :id");
            $sql->execute(array(
                ':valor'=>$valor,
                ':id' => $id
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function editBanner($id,$titulo,$descricao,$botao,$ordem,$status,$botaoLink){
        try {
            $sql = $this->conexao->prepare("UPDATE banner SET titulo = :titulo, descricao = :descricao, botao = :botao, ordem = :ordem, status = :status, botaoLink = :botaoLink WHERE id = :id");
            $sql->execute(array(
                ':titulo'=>$titulo,
                ':descricao'=>$descricao,
                ':botao'=>$botao,
                ':ordem'=>$ordem,
                ':status'=>$status,
                ':botaoLink'=>$botaoLink,
                ':id' => $id
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function editBannerComImagem($id,$titulo,$descricao,$botao,$imagem,$ordem,$status,$botaoLink){
        try {
            $sql = $this->conexao->prepare("UPDATE banner SET titulo = :titulo, descricao = :descricao, botao = :botao, imagem = :imagem, ordem = :ordem, status = :status, botaoLink = :botaoLink WHERE id = :id");
            $sql->execute(array(
                ':titulo'=>$titulo,
                ':descricao'=>$descricao,
                ':botao'=>$botao,
                ':imagem'=>$imagem,
                ':ordem'=>$ordem,
                ':status'=>$status,
                ':botaoLink'=>$botaoLink,
                ':id' => $id
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function delBanner($id){
        try {
            $sql = $this->conexao->prepare("DELETE FROM banner WHERE id = :id");
            $sql->execute(array(
                ':id'=>$id
            ));
        }catch (PDOException $e) {
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
    public function buscarTodosServicos()
    {
        try {
            $sql = $this->conexao->prepare("select * from servicos");
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
    public function buscarServicoPorid($id)
    {
        try {
            $sql = $this->conexao->prepare("select * from servicos where id = :id");
            $sql->execute(array(
                ':id'=>$id
            ));
            $dados = $sql->fetch();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function editServico($id,$desc,$texto,$status,$inicial){
        try {
            $sql = $this->conexao->prepare("UPDATE servicos SET descricao = :descricao, texto = :texto, status = :status, inicial = :inicial WHERE id = :id");
            $sql->execute(array(
                ':descricao'=>$desc,
                ':texto'=>$texto,
                ':status'=>$status,
                ':inicial'=>$inicial,
                ':id' => $id
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function editServicoComImagem($id,$desc,$texto,$status,$inicial,$imagem){
        try {
            $sql = $this->conexao->prepare("UPDATE servicos SET descricao = :descricao, texto = :texto, status = :status, inicial = :inicial, imagem =:imagem WHERE id = :id");
            $sql->execute(array(
                ':descricao'=>$desc,
                ':texto'=>$texto,
                ':status'=>$status,
                ':inicial'=>$inicial,
                ':imagem' => $imagem,
                ':id' => $id
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function editServicoStatus($id,$valor){
        try {
            $sql = $this->conexao->prepare("UPDATE servicos SET status = :valor WHERE id = :id");
            $sql->execute(array(
                ':valor'=>$valor,
                ':id' => $id
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function editServicoInicial($id,$valor){
        try {
            $sql = $this->conexao->prepare("UPDATE servicos SET inicial = :valor WHERE id = :id");
            $sql->execute(array(
                ':valor'=>$valor,
                ':id' => $id
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function addServico($desc,$texto,$status,$inicial, $imagem){
        try {
            $sql = $this->conexao->prepare("INSERT INTO servicos(descricao, texto, status, inicial, imagem) VALUES (:descricao, :texto, :status,:inicial, :imagem)");
            $sql->execute(array(
                ':descricao'=>$desc,
                ':texto' => $texto,
                ':status' =>$status,
                ':inicial' =>$inicial,
                ':imagem' =>$imagem
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function delServico($id){
        try {
            $sql = $this->conexao->prepare("DELETE FROM servicos WHERE id = :id");
            $sql->execute(array(
                ':id'=>$id
            ));
        }catch (PDOException $e) {
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
    public function editUsuarioComSenha($id, $nome,$cpf_cpnj,$data_nasc,$cro,$assinatura,$telefone,$telefone_s,$status,$email,$senha,$grupo){
        try {
            $sql = $this->conexao->prepare("UPDATE usuario SET nome = :nome, cpf = :cpf_cpnj, data_nascimento = :data_nasc,cro = :cro,
            telefone = :telefone,telefone_s = :telefone_s,status = :status,email = :email,senha = :senha,assinatura = :assinatura, id_grupo = :id_grupo WHERE id = :id");
            $sql->execute(array(
                ':id'=>$id,
                ':cpf_cpnj'=>$cpf_cpnj,
                ':nome' => $nome,
                ':data_nasc' =>$data_nasc,
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
    public function editUsuario($id, $nome,$cpf_cpnj,$data_nasc,$cro,$assinatura,$telefone,$telefone_s,$status,$email,$grupo){
        try {
            $sql = $this->conexao->prepare("UPDATE usuario SET nome = :nome, cpf = :cpf_cpnj, data_nascimento = :data_nasc,cro = :cro,
            telefone = :telefone,telefone_s = :telefone_s,status = :status,email = :email,assinatura = :assinatura, id_grupo = :id_grupo WHERE id = :id");
            $sql->execute(array(
                ':id'=>$id,
                ':cpf_cpnj'=>$cpf_cpnj,
                ':nome' => $nome,
                ':data_nasc' =>$data_nasc,
                ':cro' => $cro,
                ':telefone' => $telefone,
                ':telefone_s' => $telefone_s,
                ':status' => $status,
                ':email' => $email,
                ':assinatura' => $assinatura,
                ':id_grupo' => $grupo
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function delUsuario($id){
        try {
            $sql = $this->conexao->prepare("DELETE FROM usuario WHERE id = :id");
            $sql->execute(array(
                ':id'=>$id
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
    public function buscarEstado()
    {
        try {
            $sql = $this->conexao->prepare("select * from estado");
            $sql->execute();
            $dados = $sql->fetchAll();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function buscarMunicipio()
    {
        try {
            $sql = $this->conexao->prepare("select * from municipio");
            $sql->execute();
            $dados = $sql->fetchAll();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function editSiteComLogo($descricao_site,$descricao,$logotipo,$palavra_chave,$estado,$municipio,$bairro, $logradouro,$numero,$complemento,$email,$email_contato,$email_trabalhe,
                             $telefone,$telefone_s,$twitter,$facebook,$youtube,$linkedin,$gm_latitude,$gm_longitude,$gm_tipo,$ga_email,$ga_senha,$ga_perfil, $email_tipo, $email_seguranca,
                             $email_servidor,$email_protocolo,$email_smtp,$email_usuario,$email_senha,$email_porta,$midia_mimetype,$online,$mensagem_off,$whitelist,$blacklist){
        try {
            $sql = $this->conexao->prepare("UPDATE site SET descricao_site = :descricao_site, descricao = :descricao, logotipo = :logotipo, palavra_chave = :palavra_chave, uf_estado = :estado, id_municipio = :municipio,
            bairro = :bairro,logradouro = :logradouro,numero = :numero, complemento = :complemento, email = :email,email_contato = :email_contato, email_trabalhe = :email_trabalhe, telefone = :telefone, 
            telefone_s = :telefone_s, twitter = :twitter, facebook = :facebook, youtube = :youtube, linkedin = :linkedin, gm_latitude = :gm_latitude, gm_longitude = :gm_longitude, gm_tipo =:gm_tipo,
            ga_email = :ga_email, ga_senha =:ga_senha, ga_perfil = :ga_perfil, email_tipo =:email_tipo, email_seguranca =:email_seguranca, email_servidor =:email_servidor, email_protocolo = :email_protocolo,
            email_smtp = :email_smtp, email_usuario = :email_usuario, email_senha = :email_senha, email_porta = :email_porta, midia_mimetype = :midia_mimetype, online = :online, mensagem_off = :mensagem_off,
            whitelist = :whitelist, blacklist = :blacklist WHERE id = 1");
            $sql->execute(array(
                ':descricao_site'=>$descricao_site,
                ':descricao'=>$descricao,
                ':logotipo'=>$logotipo,
                ':palavra_chave' => $palavra_chave,
                ':estado' => $estado,
                ':municipio' => $municipio,
                ':bairro' => $bairro,
                ':logradouro' => $logradouro,
                ':numero' => $numero,
                ':complemento' => $complemento,
                ':email' => $email,
                ':email_contato' => $email_contato,
                ':email_trabalhe' => $email_trabalhe,
                ':telefone' => $telefone,
                ':telefone_s' => $telefone_s,
                ':twitter' => $twitter,
                ':facebook' => $facebook,
                ':youtube' => $youtube,
                ':linkedin' => $linkedin,
                ':gm_latitude' => $gm_latitude,
                ':gm_longitude' => $gm_longitude,
                ':gm_tipo' => $gm_tipo,
                ':ga_email' => $ga_email,
                ':ga_senha' => $ga_senha,
                ':ga_perfil' => $ga_perfil,
                ':email_tipo' => $email_tipo,
                ':email_seguranca' => $email_seguranca,
                ':email_servidor' => $email_servidor,
                ':email_protocolo' => $email_protocolo,
                ':email_smtp' => $email_smtp,
                ':email_usuario' => $email_usuario,
                ':email_senha' => $email_senha,
                ':email_porta' => $email_porta,
                ':midia_mimetype' => $midia_mimetype,
                ':online' => $online,
                ':mensagem_off' => $mensagem_off,
                ':whitelist' => $whitelist,
                ':blacklist' => $blacklist,
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function editSite($descricao_site,$descricao,$palavra_chave,$estado,$municipio,$bairro, $logradouro,$numero,$complemento,$email,$email_contato,$email_trabalhe,
                                    $telefone,$telefone_s,$twitter,$facebook,$youtube,$linkedin,$gm_latitude,$gm_longitude,$gm_tipo,$ga_email,$ga_senha,$ga_perfil, $email_tipo, $email_seguranca,
                                    $email_servidor,$email_protocolo,$email_smtp,$email_usuario,$email_senha,$email_porta,$midia_mimetype,$online,$mensagem_off,$whitelist,$blacklist){
        try {
            $sql = $this->conexao->prepare("UPDATE site SET descricao_site = :descricao_site, descricao = :descricao, palavra_chave = :palavra_chave, uf_estado = :estado, id_municipio = :municipio,
            bairro = :bairro,logradouro = :logradouro,numero = :numero, complemento = :complemento, email = :email,email_contato = :email_contato, email_trabalhe = :email_trabalhe, telefone = :telefone, 
            telefone_s = :telefone_s, twitter = :twitter, facebook = :facebook, youtube = :youtube, linkedin = :linkedin, gm_latitude = :gm_latitude, gm_longitude = :gm_longitude, gm_tipo =:gm_tipo,
            ga_email = :ga_email, ga_senha =:ga_senha, ga_perfil = :ga_perfil, email_tipo =:email_tipo, email_seguranca =:email_seguranca, email_servidor =:email_servidor, email_protocolo = :email_protocolo,
            email_smtp = :email_smtp, email_usuario = :email_usuario, email_senha = :email_senha, email_porta = :email_porta, midia_mimetype = :midia_mimetype, online = :online, mensagem_off = :mensagem_off,
            whitelist = :whitelist, blacklist = :blacklist WHERE id = 1");
            $sql->execute(array(
                ':descricao_site'=>$descricao_site,
                ':descricao'=>$descricao,
                ':palavra_chave' => $palavra_chave,
                ':estado' => $estado,
                ':municipio' => $municipio,
                ':bairro' => $bairro,
                ':logradouro' => $logradouro,
                ':numero' => $numero,
                ':complemento' => $complemento,
                ':email' => $email,
                ':email_contato' => $email_contato,
                ':email_trabalhe' => $email_trabalhe,
                ':telefone' => $telefone,
                ':telefone_s' => $telefone_s,
                ':twitter' => $twitter,
                ':facebook' => $facebook,
                ':youtube' => $youtube,
                ':linkedin' => $linkedin,
                ':gm_latitude' => $gm_latitude,
                ':gm_longitude' => $gm_longitude,
                ':gm_tipo' => $gm_tipo,
                ':ga_email' => $ga_email,
                ':ga_senha' => $ga_senha,
                ':ga_perfil' => $ga_perfil,
                ':email_tipo' => $email_tipo,
                ':email_seguranca' => $email_seguranca,
                ':email_servidor' => $email_servidor,
                ':email_protocolo' => $email_protocolo,
                ':email_smtp' => $email_smtp,
                ':email_usuario' => $email_usuario,
                ':email_senha' => $email_senha,
                ':email_porta' => $email_porta,
                ':midia_mimetype' => $midia_mimetype,
                ':online' => $online,
                ':mensagem_off' => $mensagem_off,
                ':whitelist' => $whitelist,
                ':blacklist' => $blacklist,
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function buscarProcedimentos()
    {
        try {
            $sql = $this->conexao->prepare("select * from procedimento");
            $sql->execute();
            $dados = $sql->fetchAll();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function buscarProcedimentoPorId($id)
    {
        try {
            $sql = $this->conexao->prepare("select * from procedimento where id = :id");
            $sql->execute(array(
                ':id'=>$id
            ));
            $dados = $sql->fetch();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function addProcedimento($descricao,$duracao){
        try {
            $sql = $this->conexao->prepare("INSERT INTO procedimento(descricao,duracao_media) VALUES 
            (:descricao, :duracao)");
            $sql->execute(array(
                ':descricao'=>$descricao,
                ':duracao' => $duracao
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function editProcedimento($id, $descricao,$duracao){
        try {
            $sql = $this->conexao->prepare("UPDATE procedimento SET descricao = :descricao, duracao_media = :duracao WHERE id = :id");
            $sql->execute(array(
                ':id'=>$id,
                ':descricao'=>$descricao,
                ':duracao' => $duracao
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function delProcedimento($id){
        try {
            $sql = $this->conexao->prepare("DELETE FROM procedimento WHERE id = :id");
            $sql->execute(array(
                ':id'=>$id
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
}