<?php

require 'Base.php';

class Metodo extends Base
{
    public function buscarPacientePorId($id)
    {
        try {
            $sql = $this->conexao->prepare("select * from paciente where id = :id");
            $sql->execute(array(
                ':id' => $id
            ));
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
    public function editPacienteComSenha($id, $nome,$cpf_cpnj,$data_nasc,$nome_responsavel,$telefone,$telefone_s,$rg_ie,$nome_pai,$nome_mae,$email,$senha,$indicacao_dr,
                                         $nome_empresa,$telefone_empresa,$profissao,$horario_trabalho,$cargo,$naturalidade,$nacionalidade,$estado_civil,$nome_conjuge,$sexo){
        try {
            $sql = $this->conexao->prepare("UPDATE paciente SET nome = :nome, cpf_cnpj = :cpf_cnpj,email= :email,senha= :senha,telefone= :telefone,telefone_s= :telefone_s,
            rg_ie= :rg_ie,data_nascimento= :data_nascimento,nome_pai= :nome_pai, nome_mae= :nome_mae, nome_responsavel= :nome_responsavel, indicacao_dr= :indicacao_dr, 
            nome_empresa= :nome_empresa, telefone_empresa= :telefone_empresa, profissao= :profissao,horario_trabalho= :horario_trabalho, cargo= :cargo, naturalidade= :naturalidade, 
            nacionalidade= :nacionalidade, estado_civil= :estado_civil, nome_conjuge= :nome_conjuge, sexo= :sexo WHERE id = :id");
            $sql->execute(array(
                ':id' => $id,
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
    public function editPaciente($id, $nome,$cpf_cpnj,$data_nasc,$nome_responsavel,$telefone,$telefone_s,$rg_ie,$nome_pai,$nome_mae,$email,$indicacao_dr,
                                 $nome_empresa,$telefone_empresa,$profissao,$horario_trabalho,$cargo,$naturalidade,$nacionalidade,$estado_civil,$nome_conjuge,$sexo){
        try {
            $sql = $this->conexao->prepare("UPDATE paciente SET nome = :nome, cpf_cnpj = :cpf_cnpj,email= :email,telefone= :telefone,telefone_s= :telefone_s,
            rg_ie= :rg_ie,data_nascimento= :data_nascimento,nome_pai= :nome_pai, nome_mae= :nome_mae, nome_responsavel= :nome_responsavel, indicacao_dr= :indicacao_dr, 
            nome_empresa= :nome_empresa, telefone_empresa= :telefone_empresa, profissao= :profissao,horario_trabalho= :horario_trabalho, cargo= :cargo, naturalidade= :naturalidade, 
            nacionalidade= :nacionalidade, estado_civil= :estado_civil, nome_conjuge= :nome_conjuge, sexo= :sexo WHERE id = :id");
            $sql->execute(array(
                ':id' => $id,
                ':nome' => $nome,
                ':cpf_cnpj'=>$cpf_cpnj,
                ':email' => $email,
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
    public function buscarEnderecoPorIdPaciente($id)
    {
        try {
            $sql = $this->conexao->prepare("select * from endereco where id_paciente = :id");
            $sql->execute(array(
                ':id' => $id
            ));
            $dados = $sql->fetchAll();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function buscarEstadoIdEndereco($id)
    {
        try {
            $sql = $this->conexao->prepare("select * from estado where uf = :id");
            $sql->execute(array(
                ':id' => $id
            ));
            $dados = $sql->fetch();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function buscarMunicipioIdEndereco($id)
    {
        try {
            $sql = $this->conexao->prepare("select * from municipio where id = :id");
            $sql->execute(array(
                ':id' => $id
            ));
            $dados = $sql->fetch();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function addEndereco($desc,$logradouro,$numero,$complemento,$cep,$id_municipio,$uf_estado,$principal,$id_paciente,$bairro){
        try {
            $sql = $this->conexao->prepare("INSERT INTO endereco(descricao, logradouro, numero, complemento, cep, id_municipio,uf_estado, principal, id_paciente,bairro) 
            VALUES (:descricao, :logradouro, :numero, :complemento,:cep,:id_municipio,:uf_estado,:principal,:id_paciente,:bairro)");
            $sql->execute(array(
                ':descricao'=>$desc,
                ':logradouro' => $logradouro,
                ':numero' =>$numero,
                ':complemento' =>$complemento,
                ':cep' =>$cep,
                ':id_municipio' =>$id_municipio,
                ':uf_estado' =>$uf_estado,
                ':principal' =>$principal,
                ':id_paciente' =>$id_paciente,
                ':bairro' =>$bairro
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function editEndereco($id,$desc,$logradouro,$numero,$complemento,$cep,$id_municipio,$uf_estado,$principal,$id_paciente,$bairro){
        try {
            $sql = $this->conexao->prepare("UPDATE endereco SET descricao = :descricao, logradouro = :logradouro, numero = :numero, complemento = :complemento,
                                                     cep = :cep, id_municipio= :id_municipio, uf_estado = :uf_estado, principal = :principal, id_paciente = :id_paciente,
                                                     bairro = :bairro WHERE id = :id");
            $sql->execute(array(
                ':descricao'=>$desc,
                ':logradouro' => $logradouro,
                ':numero' =>$numero,
                ':complemento' =>$complemento,
                ':cep' =>$cep,
                ':id_municipio' =>$id_municipio,
                ':uf_estado' =>$uf_estado,
                ':principal' =>$principal,
                ':id_paciente' =>$id_paciente,
                ':bairro' =>$bairro,
                ':id' => $id
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function delEndereco($id){
        try {
            $sql = $this->conexao->prepare("DELETE FROM endereco WHERE id = :id");
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
    public function addGrupo($grupoNome, $grupoPermissoes){
        try {
            $sql = $this->conexao->prepare("INSERT INTO grupo(nome, permissoes) VALUES (:grupoNome, :grupoPermissoes)");
            $sql->execute(array(
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
    public function buscarProntuarios()
    {
        try {
            $sql = $this->conexao->prepare("select * from prontuario");
            $sql->execute();
            $dados = $sql->fetchAll();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function buscarProntuarioPorId($id)
    {
        try {
            $sql = $this->conexao->prepare("select * from prontuario where id = :id");
            $sql->execute(array(
                ':id'=>$id
            ));
            $dados = $sql->fetch();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function addProntuario($paciente,$erupcoes,$nodulos,$musculatura,$cadeia,$ganglionar,$cicatrizes,$assimetria_face_pescoco,$exoftalmia,$glandulas_salivares,$labios,
        $bochechas,$espaco_retromolar,$lingua,$base_lingua,$assoalho_bucal,$palato,$amigdalas,$limite_orofaringeo,$dentes_ausentes,$dentes_supranumerarios,$dentes_retidos,
        $diastema,$freios,$erosao,$hipoplasia_esmalte,$manchas,$induto,$tartaro,$retracao_gengival,$gengivas,$mobilidade_dental,$oclusao,$anomalidade_fala,$higiene_oral,
        $fluxo_salivar,$outros,$pulso,$pressao_arterial,$frequencia_respiratoria,$temperatura,$observacoes,$d18,$d17,$d16,$d15_55,$d14_54,$d13_53,$d12_52,$d11_51,$d21_61,
        $d22_62,$d23_63,$d24_64,$d25_65,$d26,$d27,$d28,$d38,$d37,$d36,$d35_75,$d34_74,$d33_73,$d32_72,$d31_71,$d41_81,$d42_82,$d43_83,$d44_84,$d45_85,$d46,$d47,$d48){
        try {
            $sql = $this->conexao->prepare("INSERT INTO prontuario(id_paciente,erupcoes,nodulos,musculatura,cadeia,ganglionar,cicatrizes,assimetria_face_pescoco,
            exoftalmia,glandulas_salivares,labios,bochechas,espaco_retromolar,lingua,base_lingua,assoalho_bucal,palato,amigdalas,limite_orofaringeo,dentes_ausentes,
            dentes_supranumerarios,dentes_retidos,diastema,freios,erosao,hipoplasia_esmalte,manchas,induto,tartaro,retracao_gengival,gengivas,mobilidade_dental,oclusao,
            anomalidade_fala,higiene_oral,fluxo_salivar,outros,pulso,pressao_arterial,frequencia_respiratoria,temperatura,observacoes,`18`,`17`,`16`,15_55,14_54,13_53,12_52,
            11_51,21_61,22_62,23_63,24_64,25_65,`26`,`27`,`28`,`38`,`37`,`36`,35_75,34_74,33_73,32_72,31_71,41_81,42_82,43_83,44_84,45_85,`46`,`47`,`48`) VALUES 
            (:id_paciente,:erupcoes,:nodulos,:musculatura, :cadeia,:ganglionar,:cicatrizes,:assimetria_face_pescoco, :exoftalmia, :glandulas_salivares,:labios, :bochechas, 
            :espaco_retromolar, :lingua, :base_lingua, :assoalho_bucal, :palato, :amigdalas, :limite_orofaringeo, :dentes_ausentes, :dentes_supranumerarios, :dentes_retidos, 
            :diastema,:freios, :erosao, :hipoplasia_esmalte,:manchas, :induto, :tartaro, :retracao_gengival, :gengivas, :mobilidade_dental, :oclusao, :anomalidade_fala, 
            :higiene_oral, :fluxo_salivar,:outros, :pulso,:pressao_arterial,:frequencia_respiratoria,:temperatura, :observacoes,:d18,:d17,:d16,:15_55,:14_54,:13_53,:12_52,
            :11_51,:21_61,:22_62,:23_63,:24_64,:25_65,:d26,:d27,:d28,:d38,:d37,:d36,:35_75,:34_74,:33_73,:32_72,:31_71,:41_81,:42_82,:43_83,:44_84,:45_85,:d46,:d47,:d48)");
            $sql->execute(array(
                ':id_paciente'=>$paciente,
                ':erupcoes'=>$erupcoes,
                ':nodulos'=>$nodulos,
                ':musculatura'=>$musculatura,
                ':cadeia'=>$cadeia,
                ':ganglionar'=>$ganglionar,
                ':cicatrizes'=>$cicatrizes,
                ':assimetria_face_pescoco'=>$assimetria_face_pescoco,
                ':exoftalmia'=>$exoftalmia,
                ':glandulas_salivares'=>$glandulas_salivares,
                ':labios'=>$labios,
                ':bochechas'=>$bochechas,
                ':espaco_retromolar'=>$espaco_retromolar,
                ':lingua'=>$lingua,
                ':base_lingua'=>$base_lingua,
                ':assoalho_bucal'=>$assoalho_bucal,
                ':palato'=>$palato,
                ':amigdalas'=>$amigdalas,
                ':limite_orofaringeo'=>$limite_orofaringeo,
                ':dentes_ausentes'=>$dentes_ausentes,
                ':dentes_supranumerarios'=>$dentes_supranumerarios,
                ':dentes_retidos'=>$dentes_retidos,
                ':diastema'=>$diastema,
                ':freios'=>$freios,
                ':erosao'=>$erosao,
                ':hipoplasia_esmalte'=>$hipoplasia_esmalte,
                ':manchas'=>$manchas,
                ':induto'=>$induto,
                ':tartaro'=>$tartaro,
                ':retracao_gengival'=>$retracao_gengival,
                ':gengivas'=>$gengivas,
                ':mobilidade_dental'=>$mobilidade_dental,
                ':oclusao'=>$oclusao,
                ':anomalidade_fala'=>$anomalidade_fala,
                ':higiene_oral'=>$higiene_oral,
                ':fluxo_salivar'=>$fluxo_salivar,
                ':outros'=>$outros,
                ':pulso'=>$pulso,
                ':pressao_arterial'=>$pressao_arterial,
                ':frequencia_respiratoria'=>$frequencia_respiratoria,
                ':temperatura'=>$temperatura,
                ':observacoes'=>$observacoes,
                ':d18'=>$d18,
                ':d17'=>$d17,
                ':d16'=>$d16,
                ':15_55'=>$d15_55,
                ':14_54'=>$d14_54,
                ':13_53'=>$d13_53,
                ':12_52'=>$d12_52,
                ':11_51'=>$d11_51,
                ':21_61'=>$d21_61,
                ':22_62'=>$d22_62,
                ':23_63'=>$d23_63,
                ':24_64'=>$d24_64,
                ':25_65'=>$d25_65,
                ':d26'=>$d26,
                ':d27'=>$d27,
                ':d28'=>$d28,
                ':d38'=>$d38,
                ':d37'=>$d37,
                ':d36'=>$d36,
                ':35_75'=>$d35_75,
                ':34_74'=>$d34_74,
                ':33_73'=>$d33_73,
                ':32_72'=>$d32_72,
                ':31_71'=>$d31_71,
                ':41_81'=>$d41_81,
                ':42_82'=>$d42_82,
                ':43_83'=>$d43_83,
                ':44_84'=>$d44_84,
                ':45_85'=>$d45_85,
                ':d46'=>$d46,
                ':d47'=>$d47,
                ':d48'=>$d48
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function editProntuario($id, $erupcoes,$nodulos,$musculatura,$cadeia,$ganglionar,$cicatrizes,$assimetria_face_pescoco,$exoftalmia,$glandulas_salivares,$labios,
                                   $bochechas,$espaco_retromolar,$lingua,$base_lingua,$assoalho_bucal,$palato,$amigdalas,$limite_orofaringeo,$dentes_ausentes,$dentes_supranumerarios,$dentes_retidos,
                                   $diastema,$freios,$erosao,$hipoplasia_esmalte,$manchas,$induto,$tartaro,$retracao_gengival,$gengivas,$mobilidade_dental,$oclusao,$anomalidade_fala,$higiene_oral,
                                   $fluxo_salivar,$outros,$pulso,$pressao_arterial,$frequencia_respiratoria,$temperatura,$observacoes,$d18,$d17,$d16,$d15_55,$d14_54,$d13_53,$d12_52,$d11_51,$d21_61,
                                   $d22_62,$d23_63,$d24_64,$d25_65,$d26,$d27,$d28,$d38,$d37,$d36,$d35_75,$d34_74,$d33_73,$d32_72,$d31_71,$d41_81,$d42_82,$d43_83,$d44_84,$d45_85,$d46,$d47,$d48){
        try {
            $sql = $this->conexao->prepare("UPDATE prontuario SET erupcoes= :erupcoes,nodulos= :nodulos,musculatura= :musculatura,cadeia= :cadeia,ganglionar= :ganglionar,
            cicatrizes= :cicatrizes,assimetria_face_pescoco= :assimetria_face_pescoco,exoftalmia= :exoftalmia,glandulas_salivares= :glandulas_salivares,labios= :labios,
            bochechas= :bochechas,espaco_retromolar= :espaco_retromolar,lingua= :lingua,base_lingua= :base_lingua,assoalho_bucal= :assoalho_bucal,palato= :palato,amigdalas= :amigdalas,
            limite_orofaringeo= :limite_orofaringeo,dentes_ausentes= :dentes_ausentes,dentes_supranumerarios= :dentes_supranumerarios,dentes_retidos= :dentes_retidos,diastema= :diastema,
            freios= :freios,erosao= :erosao,hipoplasia_esmalte= :hipoplasia_esmalte,manchas= :manchas,induto= :induto,tartaro= :tartaro,retracao_gengival= :retracao_gengival,
            gengivas= :gengivas,mobilidade_dental= :mobilidade_dental,oclusao= :oclusao,anomalidade_fala= :anomalidade_fala,higiene_oral= :higiene_oral,fluxo_salivar= :fluxo_salivar,
            outros= :outros,pulso= :pulso,pressao_arterial= :pressao_arterial,frequencia_respiratoria= :frequencia_respiratoria,temperatura= :temperatura,observacoes= :observacoes,`18`= :d18,
            `17`= :d17,`16`= :d16,15_55= :15_55,14_54= :14_54,13_53= :13_53,12_52= :12_52,11_51= :11_51,21_61= :21_61,22_62= :22_62,23_63= :23_63,24_64= :24_64,25_65= :25_65,`26`= :d26,
            `27`= :d27,`28`= :d28,`38`= :d38,`37`= :d37,`36`= :d36,35_75= :35_75,34_74= :34_74,33_73= :33_73,32_72= :32_72,31_71= :31_71,41_81= :41_81,42_82= :42_82,43_83= :43_83,
            44_84= :44_84,45_85= :45_85,`46`= :d46,`47`= :d47,`48` = :d48 WHERE id = :id");
            $sql->execute(array(
                ':id'=>$id,
                ':erupcoes'=>$erupcoes,
                ':nodulos'=>$nodulos,
                ':musculatura'=>$musculatura,
                ':cadeia'=>$cadeia,
                ':ganglionar'=>$ganglionar,
                ':cicatrizes'=>$cicatrizes,
                ':assimetria_face_pescoco'=>$assimetria_face_pescoco,
                ':exoftalmia'=>$exoftalmia,
                ':glandulas_salivares'=>$glandulas_salivares,
                ':labios'=>$labios,
                ':bochechas'=>$bochechas,
                ':espaco_retromolar'=>$espaco_retromolar,
                ':lingua'=>$lingua,
                ':base_lingua'=>$base_lingua,
                ':assoalho_bucal'=>$assoalho_bucal,
                ':palato'=>$palato,
                ':amigdalas'=>$amigdalas,
                ':limite_orofaringeo'=>$limite_orofaringeo,
                ':dentes_ausentes'=>$dentes_ausentes,
                ':dentes_supranumerarios'=>$dentes_supranumerarios,
                ':dentes_retidos'=>$dentes_retidos,
                ':diastema'=>$diastema,
                ':freios'=>$freios,
                ':erosao'=>$erosao,
                ':hipoplasia_esmalte'=>$hipoplasia_esmalte,
                ':manchas'=>$manchas,
                ':induto'=>$induto,
                ':tartaro'=>$tartaro,
                ':retracao_gengival'=>$retracao_gengival,
                ':gengivas'=>$gengivas,
                ':mobilidade_dental'=>$mobilidade_dental,
                ':oclusao'=>$oclusao,
                ':anomalidade_fala'=>$anomalidade_fala,
                ':higiene_oral'=>$higiene_oral,
                ':fluxo_salivar'=>$fluxo_salivar,
                ':outros'=>$outros,
                ':pulso'=>$pulso,
                ':pressao_arterial'=>$pressao_arterial,
                ':frequencia_respiratoria'=>$frequencia_respiratoria,
                ':temperatura'=>$temperatura,
                ':observacoes'=>$observacoes,
                ':d18'=>$d18,
                ':d17'=>$d17,
                ':d16'=>$d16,
                ':15_55'=>$d15_55,
                ':14_54'=>$d14_54,
                ':13_53'=>$d13_53,
                ':12_52'=>$d12_52,
                ':11_51'=>$d11_51,
                ':21_61'=>$d21_61,
                ':22_62'=>$d22_62,
                ':23_63'=>$d23_63,
                ':24_64'=>$d24_64,
                ':25_65'=>$d25_65,
                ':d26'=>$d26,
                ':d27'=>$d27,
                ':d28'=>$d28,
                ':d38'=>$d38,
                ':d37'=>$d37,
                ':d36'=>$d36,
                ':35_75'=>$d35_75,
                ':34_74'=>$d34_74,
                ':33_73'=>$d33_73,
                ':32_72'=>$d32_72,
                ':31_71'=>$d31_71,
                ':41_81'=>$d41_81,
                ':42_82'=>$d42_82,
                ':43_83'=>$d43_83,
                ':44_84'=>$d44_84,
                ':45_85'=>$d45_85,
                ':d46'=>$d46,
                ':d47'=>$d47,
                ':d48'=>$d48
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function delProntuario($id){
        try {
            $sql = $this->conexao->prepare("DELETE FROM prontuario WHERE id = :id");
            $sql->execute(array(
                ':id'=>$id
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function visualizarProntuario($id)
    {
        try {
            $sql = $this->conexao->prepare("select * from view_prontuario WHERE id_paciente = :id limit 1");
            $sql->execute(array(
                ':id'=>$id
            ));
            $dados = $sql->fetch();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function buscarProntuarioHistorico($id)
    {
        try {
            $sql = $this->conexao->prepare("select * from prontuario_historico where id_prontuario = :id");
            $sql->execute(array(
                ':id'=>$id
            ));
            $dados = $sql->fetchAll();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function buscarProntuarioHistoricoPorId($id)
    {
        try {
            $sql = $this->conexao->prepare("select * from prontuario_historico where id = :id");
            $sql->execute(array(
                ':id'=>$id
            ));
            $dados = $sql->fetch();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function addProntuarioHistorico($data_procedimento,$dente, $procedimento, $id_prontuario){
        try {
            $sql = $this->conexao->prepare("INSERT INTO prontuario_historico(data_procedimento, dente, procedimento, id_prontuario) VALUES 
            (:data_procedimento, :dente, :procedimento, :id_prontuario )");
            $sql->execute(array(
                ':data_procedimento'=>$data_procedimento,
                ':dente'=>$dente,
                ':procedimento'=>$procedimento,
                ':id_prontuario' => $id_prontuario
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function editProntuarioHistorico($id, $data_procedimento,$dente, $procedimento){
        try {
            $sql = $this->conexao->prepare("UPDATE prontuario_historico SET data_procedimento = :data_procedimento, dente = :dente, procedimento = :procedimento
            WHERE id = :id");
            $sql->execute(array(
                ':id'=>$id,
                ':data_procedimento'=>$data_procedimento,
                ':dente'=>$dente,
                ':procedimento'=>$procedimento
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    public function delProntuarioHistorico($id){
        try {
            $sql = $this->conexao->prepare("DELETE FROM prontuario_historico WHERE id = :id");
            $sql->execute(array(
                ':id'=>$id
            ));
        }catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
}