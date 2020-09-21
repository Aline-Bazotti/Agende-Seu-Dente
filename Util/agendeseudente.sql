-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: agendeseudente
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.37-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `agenda`
--

DROP TABLE IF EXISTS `agenda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agenda` (
  `id` int(10) NOT NULL,
  `id_paciente` int(10) DEFAULT NULL,
  `desc_evento` varchar(255) NOT NULL COMMENT 'Descrição do evento da agenda, se é reunião ou atendimento',
  `data_ini` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Data de início do evento',
  `data_fim` int(10) NOT NULL,
  `id_procedimento` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FKAgenda246187` (`id_procedimento`),
  CONSTRAINT `FKAgenda246187` FOREIGN KEY (`id_procedimento`) REFERENCES `procedimento` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Agenda com atendimentos já marcados';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agenda`
--

LOCK TABLES `agenda` WRITE;
/*!40000 ALTER TABLE `agenda` DISABLE KEYS */;
/*!40000 ALTER TABLE `agenda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `arquivos`
--

DROP TABLE IF EXISTS `arquivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `arquivos` (
  `id` int(10) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `caminho_arquivo` varchar(255) NOT NULL,
  `id_paciente` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FKArquivos205079` (`id_paciente`),
  CONSTRAINT `FKArquivos205079` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Arquivos salvos dos pacientes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `arquivos`
--

LOCK TABLES `arquivos` WRITE;
/*!40000 ALTER TABLE `arquivos` DISABLE KEYS */;
/*!40000 ALTER TABLE `arquivos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banner` (
  `id` int(10) NOT NULL COMMENT 'Id do banner',
  `titulo` varchar(20) DEFAULT NULL,
  `descricao` varchar(90) NOT NULL COMMENT 'Título, descrição, do banner',
  `botao` varchar(20) DEFAULT NULL,
  `imagem` varchar(255) NOT NULL COMMENT 'caminho da imagem do banner, ou link dela, no servidor',
  `ordem` smallint(5) NOT NULL COMMENT 'Ordem que aparece no site',
  `status` smallint(1) NOT NULL COMMENT '1 - Publicado\n0 - Inativo',
  `usu_cad` varchar(35) NOT NULL COMMENT 'Nome do usuário que fez o cadastro do banner',
  `data_cad` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Data que ocorreu o cadastro do banner',
  `usu_alt` varchar(35) DEFAULT NULL COMMENT 'Nome do usuário que alterou o cadastro do banner',
  `data_alt` timestamp NULL DEFAULT NULL COMMENT 'Data que houve alteração no cadastro do banner',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Banners cadastrados no site'
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banner`
--

LOCK TABLES `banner` WRITE;
/*!40000 ALTER TABLE `banner` DISABLE KEYS */;
/*!40000 ALTER TABLE `banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `endereco`
--

DROP TABLE IF EXISTS `endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `endereco` (
  `id` int(10) NOT NULL,
  `desc` varchar(20) NOT NULL COMMENT 'Casa, apartamento.... descrição do endereço',
  `logadouro` varchar(255) NOT NULL COMMENT 'Nome da rua, avenida, br...',
  `numero` varchar(10) DEFAULT NULL COMMENT 'Número do local, pode não ter número e pode ter letra',
  `complemento` varchar(50) DEFAULT NULL,
  `cep` int(8) NOT NULL,
  `id_municipio` int(10) NOT NULL,
  `uf_estado` char(2) NOT NULL,
  `principal` tinyint(4) NOT NULL COMMENT '1 - Sim\n0 - Não\n\nSó pode ter um principal',
  `id_paciente` int(10) NOT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FKEndereco320678` (`id_paciente`),
  KEY `FKEndereco485207` (`id_municipio`),
  KEY `FKEndereco905162` (`uf_estado`),
  CONSTRAINT `FKEndereco320678` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id`),
  CONSTRAINT `FKEndereco485207` FOREIGN KEY (`id_municipio`) REFERENCES `municipio` (`id`),
  CONSTRAINT `FKEndereco905162` FOREIGN KEY (`uf_estado`) REFERENCES `estado` (`uf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Endereços dos pacientes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `endereco`
--

LOCK TABLES `endereco` WRITE;
/*!40000 ALTER TABLE `endereco` DISABLE KEYS */;
/*!40000 ALTER TABLE `endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado`
--

DROP TABLE IF EXISTS `estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado` (
  `uf` char(2) NOT NULL COMMENT 'SC, MG, SP exemplos',
  `descricao` varchar(35) NOT NULL COMMENT 'Nome do estado por extenso',
  PRIMARY KEY (`uf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Estado do Brasil';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado`
--

LOCK TABLES `estado` WRITE;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupo`
--

DROP TABLE IF EXISTS `grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupo` (
  `id` int(10) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `permissoes` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Acesso ao sistema interno';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupo`
--

LOCK TABLES `grupo` WRITE;
/*!40000 ALTER TABLE `grupo` DISABLE KEYS */;
/*!40000 ALTER TABLE `grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `institucional`
--

DROP TABLE IF EXISTS `institucional`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `institucional` (
  `id` int(10) NOT NULL,
  `desc` varchar(45) NOT NULL COMMENT 'titulo, tipo missão, visão, valor',
  `texto` varchar(255) DEFAULT NULL,
  imagem varchar(255)DEFAULT NULL COMMENT 'caminho da imagem',
  `status` tinyint(4) NOT NULL COMMENT '1 - Publicado\n0 - Inativo',
  `inicial` tinyint(4) NOT NULL COMMENT '1 - Sim\n0 - Não',
  `slug` varchar(45) DEFAULT NULL,
  `usu_cad` int(10) NOT NULL,
  `data_cad` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usu_alt` int(10) DEFAULT NULL,
  `data_alt` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='sobre a empresa';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `institucional`
--

LOCK TABLES `institucional` WRITE;
/*!40000 ALTER TABLE `institucional` DISABLE KEYS */;
/*!40000 ALTER TABLE `institucional` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `municipio`
--

DROP TABLE IF EXISTS `municipio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `municipio` (
  `id` int(10) NOT NULL COMMENT 'ID do município',
  `descricao` varchar(50) NOT NULL COMMENT 'nome por extenso do muncípio',
  `id_estado` char(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FKmunicipio419001` (`id_estado`),
  CONSTRAINT `FKmunicipio419001` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`uf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='cadastro dos municípios para colocar no endereço';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `municipio`
--

LOCK TABLES `municipio` WRITE;
/*!40000 ALTER TABLE `municipio` DISABLE KEYS */;
/*!40000 ALTER TABLE `municipio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paciente`
--

DROP TABLE IF EXISTS `paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paciente` (
  `id` int(10) NOT NULL COMMENT 'ID do paciente',
  `nome` varchar(50) DEFAULT NULL COMMENT 'Nome completo do paciente',
  `cpf_cnpj` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL COMMENT 'e-mail que vai usar no login dele',
  `senha` varchar(100) NOT NULL COMMENT 'sha-1',
  `telefone` int(15) NOT NULL,
  `telefone_s` int(15) DEFAULT NULL COMMENT 'telefone secundário',
  `rg_ie` varchar(30) DEFAULT NULL COMMENT 'pode ter inscrição estadual isento',
  `pessoa` char(1) NOT NULL COMMENT 'F- Física\nJ- Jurídica',
  `data_cad` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usu_cad` int(10) NOT NULL,
  `data_alt` timestamp NULL DEFAULT NULL,
  `usu_alt` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf_cnpj` (`cpf_cnpj`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `rg_ie` (`rg_ie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Dados sobre o paciente';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paciente`
--

LOCK TABLES `paciente` WRITE;
/*!40000 ALTER TABLE `paciente` DISABLE KEYS */;
/*!40000 ALTER TABLE `paciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `procedimento`
--

DROP TABLE IF EXISTS `procedimento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `procedimento` (
  `id` int(10) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `duracao_media` time NOT NULL COMMENT 'Quero usar isso para fazer um cálculo automático para a hora de fim na agenda',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Procedimentos realizados';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `procedimento`
--

LOCK TABLES `procedimento` WRITE;
/*!40000 ALTER TABLE `procedimento` DISABLE KEYS */;
/*!40000 ALTER TABLE `procedimento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prontuario`
--

DROP TABLE IF EXISTS `prontuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prontuario` (
  `id` int(10) NOT NULL,
  `desc` varchar(255) NOT NULL COMMENT 'Descrição da consulta',
  `id_paciente` int(10) NOT NULL,
  `data_cad` timestamp NULL DEFAULT NULL,
  `usu_cad` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FKProntuario299457` (`id_paciente`),
  CONSTRAINT `FKProntuario299457` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Prontuário do paciente';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prontuario`
--

LOCK TABLES `prontuario` WRITE;
/*!40000 ALTER TABLE `prontuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `prontuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicos`
--

DROP TABLE IF EXISTS `servicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicos` (
  `id` int(10) NOT NULL,
  `desc` varchar(45) NOT NULL COMMENT 'título do serviço',
  `texto` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1 - Publicado\n0 - Inativo',
  `slug` varchar(45) DEFAULT NULL,
  `usu_cad` int(10) NOT NULL,
  `data_cad` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usu_alt` int(10) DEFAULT NULL,
  `data_alt` timestamp NULL DEFAULT NULL,
  `inicial` tinyint(4) NOT NULL COMMENT '1 - Sim\n0 - Não',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Serviços oferecidos pela clinica (cabelo, unhas, hidratação e unhas)';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicos`
--

LOCK TABLES `servicos` WRITE;
/*!40000 ALTER TABLE `servicos` DISABLE KEYS */;
/*!40000 ALTER TABLE `servicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site`
--

DROP TABLE IF EXISTS `site`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site` (
  `id` int(1) NOT NULL COMMENT 'Só vai ter um',
  `descricao_site` varchar(20) NOT NULL COMMENT 'é o título: Agende Seu Dente',
  `descricao` varchar(255) DEFAULT NULL COMMENT 'Webapp para gerenciamento de clinica com agenda',
  `logotipo` varchar(255) DEFAULT NULL COMMENT 'o caminho dela',
  `palavra_chave` varchar(20) DEFAULT NULL COMMENT 'Pode ser os mesmos do tcc',
  `email` varchar(255) DEFAULT NULL COMMENT 'que aparece no site',
  `email_contato` varchar(255) DEFAULT NULL COMMENT 'que recebe os e-mail do site',
  `email_trabalhe` varchar(255) DEFAULT NULL COMMENT 'que recebe os e-mail do trabalhe conosco',
  `url` varchar(21) DEFAULT NULL COMMENT 'agendeseudente.com.br',
  `logadouro` varchar(255) DEFAULT NULL,
  `numero` int(10) DEFAULT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `id_municipio` int(10) NOT NULL,
  `uf_estado` char(2) NOT NULL,
  `cep` int(8) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `telefone_s` int(10) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL COMMENT 'link do twitter',
  `facebook` varchar(50) DEFAULT NULL,
  `youtube` varchar(50) DEFAULT NULL,
  `linkedin` varchar(50) DEFAULT NULL,
  `gm_latitude` int(10) DEFAULT NULL,
  `gm_longitude` int(10) DEFAULT NULL,
  `gm_tipo` varchar(255) DEFAULT NULL COMMENT 'ROADMAP',
  `ga_email` varchar(255) DEFAULT NULL,
  `ga_senha` varchar(255) DEFAULT NULL,
  `ga_perfil` varchar(10) DEFAULT NULL,
  `online` tinyint(4) NOT NULL COMMENT '1 - Sim\n0 - Não',
  `mensagem_off` varchar(255) NOT NULL,
  `whitelist` varchar(255) DEFAULT NULL,
  `blacklist` varchar(255) DEFAULT NULL,
  `email_tipo` varchar(10) DEFAULT NULL COMMENT 'html',
  `email_seguranca` varchar(5) DEFAULT NULL COMMENT 'tls',
  `email_servidor` varchar(50) DEFAULT NULL COMMENT 'e-mail do servidor, aline@aline.com.br',
  `email_protocolo` varchar(15) DEFAULT NULL COMMENT 'smtp',
  `email_smtp` varchar(255) DEFAULT NULL COMMENT 'link do host',
  `email_usuario` varchar(255) DEFAULT NULL,
  `email_senha` varchar(255) DEFAULT NULL,
  `email_porta` varchar(5) DEFAULT NULL,
  `midia_mimetype` varchar(255) DEFAULT NULL COMMENT 'mídias aceitas em uploads',
  PRIMARY KEY (`id`),
  KEY `FKSite192440` (`uf_estado`),
  KEY `FKSite388780` (`id_municipio`),
  CONSTRAINT `FKSite192440` FOREIGN KEY (`uf_estado`) REFERENCES `estado` (`uf`),
  CONSTRAINT `FKSite388780` FOREIGN KEY (`id_municipio`) REFERENCES `municipio` (`id`),
  CONSTRAINT `FKSite839667` FOREIGN KEY (`id_municipio`) REFERENCES `endereco` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Configurações gerais do site';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site`
--

LOCK TABLES `site` WRITE;
/*!40000 ALTER TABLE `site` DISABLE KEYS */;
/*!40000 ALTER TABLE `site` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitacao_horario`
--

DROP TABLE IF EXISTS `solicitacao_horario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `solicitacao_horario` (
  `id` int(10) NOT NULL,
  `nome` varchar(35) DEFAULT NULL COMMENT 'Nome da pessoa',
  `cpf_cnpj` varchar(30) NOT NULL,
  `desc` varchar(255) DEFAULT NULL COMMENT 'descrever basicamente o que aconteceu',
  `idade` tinyint(4) NOT NULL,
  `sente_dor` tinyint(4) DEFAULT NULL COMMENT '1 - Sim\n0 - Não',
  `quanto_tempo` varchar(255) DEFAULT NULL COMMENT 'Está com o sintoma há quanto tempo?',
  `gravidez` tinyint(4) NOT NULL COMMENT '1 - Sim\n2 - Não',
  `gravida_sim_semanas` tinyint(4) DEFAULT NULL COMMENT 'Se está gravida, a quantas semanas',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Isso aqui é pro front, pro paciente no site';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitacao_horario`
--

LOCK TABLES `solicitacao_horario` WRITE;
/*!40000 ALTER TABLE `solicitacao_horario` DISABLE KEYS */;
/*!40000 ALTER TABLE `solicitacao_horario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(10) NOT NULL COMMENT 'Id do usuário',
  `cpf` varchar(30) NOT NULL COMMENT 'CPF do usuário',
  `nome` varchar(35) NOT NULL COMMENT 'Nome completo do usuário',
  `data_nascimento` date DEFAULT NULL,
  `cro` varchar(10) DEFAULT NULL COMMENT 'CRO-UF XX-XXX',
  `telefone` int(15) DEFAULT NULL,
  `telefone_s` int(15) DEFAULT NULL COMMENT 'Telefone Secundário',
  `status` smallint(1) DEFAULT NULL COMMENT '1 - Ativo\n0 - Inativo.\n\nQuem está inativo não pode fazer login no sistema',
  `email` varchar(35) NOT NULL COMMENT 'e-mail utilizado para fazer o login no admin do site',
  `senha` varchar(100) NOT NULL COMMENT 'Gerada em Sha-1',
  `recuperar_senha_codigo` varchar(255) DEFAULT NULL COMMENT 'Rever esse',
  `assinatura` varchar(255) DEFAULT NULL COMMENT 'Assinatura salva de forma digital, pode ser o link',
  `data_cad` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Data em que o usuário foi cadastrado',
  `data_alt` timestamp NULL DEFAULT NULL COMMENT 'Data em que houve alteração no cadastro do usuário',
  `usu_alt` varchar(35) DEFAULT NULL COMMENT 'Nome do usuário que fez a alteração no cadastro desse',
  `permissoes` varchar(255) NOT NULL COMMENT 'Rever esse. Tem que ser em JSON\n\ngrupo\n1- sim\n0 - não',
  `id_grupo` int(10) NOT NULL COMMENT 'ID do grupo de permissões que o usuário pertence',
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `data_nascimento` (`data_nascimento`),
  KEY `FKUsuario845885` (`id_grupo`),
  CONSTRAINT `FKUsuario845885` FOREIGN KEY (`id_grupo`) REFERENCES `grupo` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Usuários da parte administrativa do site\nDentista e Auxiliar, por exemplo';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'agendeseudente'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-16 23:34:32
