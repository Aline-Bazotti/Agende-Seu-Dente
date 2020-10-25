create database agendeseudente;

create or replace TABLE `grupo` (
  `id` int(10) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `permissoes` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Acesso ao sistema interno';

create or replace TABLE `estado` (
  `uf` char(2) NOT NULL COMMENT 'SC, MG, SP exemplos',
  `descricao` varchar(35) NOT NULL COMMENT 'Nome do estado por extenso',
  PRIMARY KEY (`uf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Estado do Brasil';

create or replace TABLE `municipio` (
  `id` int(10) NOT NULL COMMENT 'ID do município',
  `descricao` varchar(50) NOT NULL COMMENT 'nome por extenso do muncípio',
  `id_estado` char(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FKmunicipio419001` (`id_estado`),
  CONSTRAINT `FKmunicipio419001` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`uf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='cadastro dos municípios para colocar no endereço';

create or replace TABLE `usuario` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Id do usuário',
  `cpf` varchar(30) NOT NULL COMMENT 'CPF do usuário',
  `nome` varchar(35) NOT NULL COMMENT 'Nome completo do usuário',
  `data_nascimento` date DEFAULT NULL,
  `cro` varchar(10) DEFAULT NULL COMMENT 'CRO-UF XX-XXX',
  `telefone` varchar(20) DEFAULT NULL,
  `telefone_s` varchar(20) DEFAULT NULL COMMENT 'Telefone Secundário',
  `status` smallint(1) DEFAULT NULL COMMENT '1 - Ativo\n0 - Inativo.\n\nQuem está inativo não pode fazer login no sistema',
  `email` varchar(35) NOT NULL COMMENT 'e-mail utilizado para fazer o login no admin do site',
  `senha` varchar(100) NOT NULL COMMENT 'Gerada em Sha-1',
  `recuperar_senha_codigo` varchar(255) DEFAULT NULL COMMENT 'Rever esse',
  `assinatura` varchar(255) DEFAULT NULL COMMENT 'Assinatura salva de forma digital, pode ser o link',
  `data_cad` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'Data em que o usuário foi cadastrado',
  `data_alt` timestamp NULL DEFAULT current_timestamp() COMMENT 'Data em que houve alteração no cadastro do usuário',
  `usu_alt` varchar(35) DEFAULT NULL COMMENT 'Nome do usuário que fez a alteração no cadastro desse',
  `permissoes` varchar(255) DEFAULT NULL COMMENT 'rever',
  `id_grupo` int(10) NOT NULL COMMENT 'ID do grupo de permissões que o usuário pertence',
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `data_nascimento` (`data_nascimento`),
  KEY `FKUsuario845885` (`id_grupo`),
  CONSTRAINT `FKUsuario845885` FOREIGN KEY (`id_grupo`) REFERENCES `grupo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COMMENT='Usuários da parte administrativa do site\nDentista e Auxiliar, por exemplo';

create or replace TABLE `banner` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Id do banner',
  `titulo` varchar(20) DEFAULT NULL,
  `descricao` varchar(90) NOT NULL COMMENT 'Título, descrição, do banner',
  `botao` varchar(20) DEFAULT NULL,
  `imagem` varchar(255) NOT NULL COMMENT 'caminho da imagem do banner, ou link dela, no servidor',
  `ordem` smallint(5) NOT NULL COMMENT 'Ordem que aparece no site',
  `status` smallint(1) NOT NULL COMMENT '1 - Publicado\n0 - Inativo',
  `usu_cad` varchar(35) NOT NULL COMMENT 'Nome do usuário que fez o cadastro do banner',
  `data_cad` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'Data que ocorreu o cadastro do banner',
  `usu_alt` varchar(35) DEFAULT NULL COMMENT 'Nome do usuário que alterou o cadastro do banner',
  `data_alt` timestamp NULL DEFAULT NULL COMMENT 'Data que houve alteração no cadastro do banner',
  `botaoLink` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Banners cadastrados no site'

create or replace TABLE `procedimento` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL,
  `duracao_media` time NOT NULL COMMENT 'Quero usar isso para fazer um cálculo automático para a hora de fim na agenda',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COMMENT='Procedimentos realizados';

create or replace TABLE `agenda` (
  `id` int(10) NOT NULL,
  `id_paciente` int(10) DEFAULT NULL,
  `desc_evento` varchar(255) NOT NULL COMMENT 'Descrição do evento da agenda, se é reunião ou atendimento',
  `data_ini` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'Data de início do evento',
  `data_fim` int(10) NOT NULL,
  `id_procedimento` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FKAgenda246187` (`id_procedimento`),
  CONSTRAINT `FKAgenda246187` FOREIGN KEY (`id_procedimento`) REFERENCES `procedimento` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Agenda com atendimentos já marcados';

create or replace TABLE `paciente` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ID do paciente',
  `nome` varchar(50) DEFAULT NULL COMMENT 'Nome completo do paciente',
  `cpf_cnpj` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL COMMENT 'e-mail que vai usar no login dele',
  `senha` varchar(100) NOT NULL COMMENT 'sha-1',
  `telefone` int(15) NOT NULL,
  `telefone_s` int(15) DEFAULT NULL COMMENT 'telefone secundário',
  `rg_ie` varchar(30) DEFAULT NULL COMMENT 'pode ter inscrição estadual isento',
  `pessoa` char(1) NOT NULL DEFAULT 'F' COMMENT 'F- Física\nJ- Jurídica',
  `data_cad` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usu_cad` int(10) NOT NULL,
  `data_alt` timestamp NULL DEFAULT NULL,
  `usu_alt` int(10) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `nome_pai` varchar(100) DEFAULT NULL,
  `nome_mae` varchar(100) DEFAULT NULL,
  `nome_responsavel` varchar(100) DEFAULT NULL,
  `indicacao_dr` varchar(100) DEFAULT NULL COMMENT 'Qual Dr(a) que indicou',
  `nome_empresa` varchar(100) DEFAULT NULL,
  `telefone_empresa` varchar(15) DEFAULT NULL,
  `profissao` varchar(100) DEFAULT NULL,
  `horario_trabalho` varchar(100) DEFAULT NULL,
  `cargo` varchar(100) DEFAULT NULL,
  `naturalidade` varchar(100) DEFAULT NULL,
  `nacionalidade` varchar(100) DEFAULT NULL,
  `estado_civil` varchar(100) DEFAULT NULL,
  `nome_conjuge` varchar(100) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL COMMENT 'F-feminino, M-masculino',
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf_cnpj` (`cpf_cnpj`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `rg_ie` (`rg_ie`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='Dados sobre o paciente'

create or replace TABLE `arquivos` (
  `id` int(10) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `caminho_arquivo` varchar(255) NOT NULL,
  `id_paciente` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FKArquivos205079` (`id_paciente`),
  CONSTRAINT `FKArquivos205079` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Arquivos salvos dos pacientes';

create or replace TABLE `endereco` (
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

create or replace TABLE `institucional` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `desc` varchar(45) NOT NULL COMMENT 'titulo, tipo missão, visão, valor',
  `texto` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1 - Publicado\n0 - Inativo',
  `inicial` tinyint(4) NOT NULL COMMENT '1 - Sim\n0 - Não',
  `slug` varchar(45) DEFAULT NULL,
  `usu_cad` int(10) NOT NULL,
  `data_cad` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usu_alt` int(10) DEFAULT NULL,
  `data_alt` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='sobre a empresa';

create or replace TABLE `prontuario` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(10) NOT NULL,
  `data_cad` timestamp NULL DEFAULT current_timestamp(),
  `usu_cad` int(10) DEFAULT NULL,
  `erupcoes` varchar(100) DEFAULT NULL,
  `nodulos` varchar(100) DEFAULT NULL,
  `musculatura` varchar(100) DEFAULT NULL,
  `cadeia` varchar(100) DEFAULT NULL,
  `ganglionar` varchar(100) DEFAULT NULL,
  `cicatrizes` varchar(100) DEFAULT NULL,
  `assimetria_face_pescoco` varchar(100) DEFAULT NULL,
  `exoftalmia` varchar(100) DEFAULT NULL,
  `glandulas_salivares` varchar(100) DEFAULT NULL,
  `labios` varchar(100) DEFAULT NULL,
  `bochechas` varchar(100) DEFAULT NULL,
  `espaco_retromolar` varchar(100) DEFAULT NULL,
  `lingua` varchar(100) DEFAULT NULL,
  `base_lingua` varchar(100) DEFAULT NULL,
  `assoalho_bucal` varchar(100) DEFAULT NULL,
  `palato` varchar(100) DEFAULT NULL,
  `amigdalas` varchar(100) DEFAULT NULL,
  `limite_orofaringeo` varchar(100) DEFAULT NULL,
  `dentes_ausentes` varchar(100) DEFAULT NULL,
  `dentes_supranumerarios` varchar(100) DEFAULT NULL,
  `dentes_retidos` varchar(100) DEFAULT NULL,
  `diastema` varchar(100) DEFAULT NULL,
  `freios` varchar(100) DEFAULT NULL,
  `erosao` varchar(100) DEFAULT NULL,
  `hipoplasia_esmalte` varchar(100) DEFAULT NULL,
  `manchas` varchar(100) DEFAULT NULL,
  `induto` varchar(100) DEFAULT NULL,
  `tartaro` varchar(100) DEFAULT NULL,
  `retracao_gengival` varchar(100) DEFAULT NULL,
  `gengivas` varchar(100) DEFAULT NULL,
  `mobilidade_dental` varchar(100) DEFAULT NULL,
  `oclusao` varchar(100) DEFAULT NULL,
  `anomalidade_fala` varchar(100) DEFAULT NULL,
  `higiene_oral` varchar(100) DEFAULT NULL,
  `fluxo_salivar` varchar(100) DEFAULT NULL,
  `outros` varchar(100) DEFAULT NULL,
  `pulso` varchar(100) DEFAULT NULL,
  `pressao_arterial` varchar(100) DEFAULT NULL,
  `frequencia_respiratoria` varchar(100) DEFAULT NULL,
  `temperatura` varchar(100) DEFAULT NULL,
  `observacoes` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_paciente` (`id_paciente`),
  KEY `FKProntuario299457` (`id_paciente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='Prontuário do paciente'

create or replace TABLE `servicos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) NOT NULL COMMENT 'título do serviço',
  `texto` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1 - Publicado\n0 - Inativo',
  `imagem` varchar(255) DEFAULT NULL,
  `usu_cad` int(10) NOT NULL,
  `data_cad` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usu_alt` int(10) DEFAULT NULL,
  `data_alt` timestamp NULL DEFAULT NULL,
  `inicial` tinyint(4) NOT NULL COMMENT '1 - Sim\n0 - Não',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Serviços oferecidos pela clinica (cabelo, unhas, hidratação e unhas)';

create or replace TABLE `site` (
  `id` int(1) NOT NULL AUTO_INCREMENT COMMENT 'Só vai ter um',
  `descricao_site` varchar(20) NOT NULL COMMENT 'é o título: Agende Seu Dente',
  `descricao` varchar(255) DEFAULT NULL COMMENT 'Webapp para gerenciamento de clinica com agenda',
  `logotipo` varchar(255) DEFAULT NULL COMMENT 'o caminho dela',
  `palavra_chave` varchar(50) DEFAULT NULL COMMENT 'Pode ser os mesmos do tcc',
  `email` varchar(255) DEFAULT NULL COMMENT 'que aparece no site',
  `email_contato` varchar(255) DEFAULT NULL COMMENT 'que recebe os e-mail do site',
  `email_trabalhe` varchar(255) DEFAULT NULL COMMENT 'que recebe os e-mail do trabalhe conosco',
  `url` varchar(21) DEFAULT NULL COMMENT 'agendeseudente.com.br',
  `logradouro` varchar(255) DEFAULT NULL,
  `numero` int(10) DEFAULT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `id_municipio` int(10) DEFAULT NULL,
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
  CONSTRAINT `FKSite388780` FOREIGN KEY (`id_municipio`) REFERENCES `municipio` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COMMENT='Configurações gerais do site'

create or replace TABLE `solicitacao_horario` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(35) DEFAULT NULL COMMENT 'Nome da pessoa',
  `cpf_cnpj` varchar(30) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL COMMENT 'descrever basicamente o que aconteceu',
  `data_nascimento` date NOT NULL,
  `sente_dor` tinyint(4) DEFAULT NULL COMMENT '1 - Sim\n0 - Não',
  `quanto_tempo` varchar(255) DEFAULT NULL COMMENT 'Está com o sintoma há quanto tempo?',
  `gravidez` tinyint(4) DEFAULT NULL COMMENT '1 - Sim\n2 - Não',
  `gravida_sim_semanas` varchar(10) DEFAULT NULL COMMENT 'Se está gravida, a quantas semanas',
  `marcado` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='Isso aqui é pro front, pro paciente no site';

CREATE TABLE `prontuario_historico` (
	id INT auto_increment NOT NULL,
	data_procedimento DATE NOT NULL,
	dente TINYINT(2) NULL,
	procedimento varchar(255) null,
	PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_general_ci;


create or replace
algorithm = UNDEFINED view `agendeseudente`.`view_prontuario` as
select
    `p`.`id` as `id`,
    `p`.`amigdalas` as `amigdalas`,
    `p`.`anomalidade_fala` as `anomalidade_fala`,
    `p`.`assimetria_face_pescoco` as `assimetria_face_pescoco`,
    `p`.`assoalho_bucal` as `assoalho_bucal`,
    `p`.`base_lingua` as `base_lingua`,
    `p`.`bochechas` as `bochechas`,
    `p`.`cadeia` as `cadeia`,
    `p`.`cicatrizes` as `cicatrizes`,
    `p`.`data_cad` as `data_cad`,
    `p`.`dentes_ausentes` as `dentes_ausentes`,
    `p`.`dentes_retidos` as `dentes_retidos`,
    `p`.`dentes_supranumerarios` as `dentes_supranumerarios`,
    `p`.`diastema` as `diastema`,
    `p`.`erosao` as `erosao`,
    `p`.`espaco_retromolar` as `espaco_retromolar`,
    `p`.`exoftalmia` as `exoftalmia`,
    `p`.`fluxo_salivar` as `fluxo_salivar`,
    `p`.`freios` as `freios`,
    `p`.`frequencia_respiratoria` as `frequencia_respiratoria`,
    `p`.`ganglionar` as `ganglionar`,
    `p`.`gengivas` as `gengivas`,
    `p`.`glandulas_salivares` as `glandulas_salivares`,
    `p`.`higiene_oral` as `higiene_oral`,
    `p`.`hipoplasia_esmalte` as `hipoplasia_esmalte`,
    `p`.`induto` as `induto`,
    `p`.`labios` as `labios`,
    `p`.`limite_orofaringeo` as `limite_orofaringeo`,
    `p`.`lingua` as `lingua`,
    `p`.`manchas` as `manchas`,
    `p`.`mobilidade_dental` as `mobilidade_dental`,
    `p`.`musculatura` as `musculatura`,
    `p`.`nodulos` as `nodulos`,
    `p`.`observacoes` as `observacoes`,
    `p`.`oclusao` as `oclusao`,
    `p`.`outros` as `outros`,
    `p`.`palato` as `palato`,
    `p`.`pressao_arterial` as `pressao_arterial`,
    `p`.`pulso` as `pulso`,
    `p`.`retracao_gengival` as `retracao_gengival`,
    `p`.`tartaro` as `tartaro`,
    `p`.`temperatura` as `temperatura`,
    `p2`.`id` as `id_paciente`,
    `p2`.`cargo` as `cargo`,
    `p2`.`cpf_cnpj` as `cpf_cnpj`,
    `p2`.`data_nascimento` as `data_nascimento`,
    `p2`.`email` as `email`,
    `p2`.`estado_civil` as `estado_civil`,
    `p2`.`horario_trabalho` as `horario_trabalho`,
    `p2`.`indicacao_dr` as `indicacao_dr`,
    `p2`.`nacionalidade` as `nacionalidade`,
    `p2`.`naturalidade` as `naturalidade`,
    `p2`.`nome` as `nome`,
    `p2`.`nome_conjuge` as `nome_conjuge`,
    `p2`.`nome_empresa` as `nome_empresa`,
    `p2`.`nome_mae` as `nome_mae`,
    `p2`.`nome_pai` as `nome_pai`,
    `p2`.`nome_responsavel` as `nome_responsavel`,
    `p2`.`pessoa` as `pessoa`,
    `p2`.`profissao` as `profissao`,
    `p2`.`rg_ie` as `rg_ie`,
    `p2`.`sexo` as `sexo`,
    `p2`.`telefone` as `telefone`,
    `p2`.`telefone_empresa` as `telefone_empresa`,
    `p2`.`telefone_s` as `telefone_s`,
    `e`.`bairro` as `bairro`,
    `e`.`cep` as `cep`,
    `e`.`complemento` as `complemento`,
    `e`.`descricao` as `identificacao`,
    `e`.`logradouro` as `logradouro`,
    `e`.`numero` as `numero`,
    `e`.`principal` as `principal`,
    `e2`.`descricao` as `estado`,
    `m`.`descricao` as `descricao`
from
    ((((`agendeseudente`.`prontuario` `p`
join `agendeseudente`.`paciente` `p2` on
    (`p`.`id_paciente` = `p2`.`id`))
join `agendeseudente`.`endereco` `e` on
    (`e`.`id_paciente` = `p2`.`id`))
join `agendeseudente`.`estado` `e2` on
    (`e2`.`uf` = `e`.`uf_estado`))
join `agendeseudente`.`municipio` `m` on
    (`m`.`id` = `e`.`id_municipio`));