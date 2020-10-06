<?php

class Site_m extends DBModel {

  var $_tabela = 'site';
  var $_id = 'id_site';
  var $_desc = 'desc_site';
  var $_order = 'desc_site ASC';

  function __construct() {
	parent::__construct();
  }

  public function _before_update($dado) {
	return array('status' => TRUE);
  }

  function update($dado, $id = NULL, $tabela = NULL, $id_tabela = NULL) {
	$_before_update = $this->_before_update($dado);
	if (!$_before_update['status']) {
	  return $_before_update;
	}

	// Dados antigos
	$_old = $this->get_id($dado['id']);

	// Logotipo - excluir
	if (isset($dado['logotipo_excluir']) AND ( (bool) $dado['logotipo_excluir'] == TRUE)) {
	  @unlink($this->dir_uploads . $_old->logotipo);
	  $dado['logotipo'] = NULL;
	  unset($dado['logotipo_excluir']);
	}

	// Logotipo - enviar (error = 4: nenhum arquivo foi enviado)
	if (isset($_FILES['logotipo']) && $_FILES['logotipo']['error'] != 4) {
	  $gerenciadorLogotipo = $this->gerenciador_m->upload('logotipo', $this->modulo->url);
	  if ($gerenciadorLogotipo['status'] == TRUE) {
		@unlink($this->dir_uploads . $_old->logotipo);
		$dado['logotipo'] = $gerenciadorLogotipo['upload']['file_name'];
	  } else {
		$this->session->set_flashdata('msgaux', alert($gerenciadorLogotipo['msg'], 'danger'));
		unset($dado['logotipo']);
	  }
	}

	// Logotipo do E-mail - excluir
	if (isset($dado['email_logotipo_excluir']) AND ( (bool) $dado['email_logotipo_excluir'] == TRUE)) {
	  @unlink($this->dir_uploads . $_old->email_logotipo);
	  $dado['email_logotipo'] = NULL;
	  unset($dado['email_logotipo_excluir']);
	}

	// Logotipo do E-mail - enviar (error = 4: nenhum arquivo foi enviado)
	if (isset($_FILES['email_logotipo']) && $_FILES['email_logotipo']['error'] != 4) {
	  $gerenciadorEmail_logotipo = $this->gerenciador_m->upload('email_logotipo', $this->modulo->url);
	  if ($gerenciadorEmail_logotipo['status'] == TRUE) {
		@unlink($this->dir_uploads . $_old->email_logotipo);
		$dado['email_logotipo'] = $gerenciadorEmail_logotipo['upload']['file_name'];
	  } else {
		$this->session->set_flashdata('msgaux', alert($gerenciadorEmail_logotipo['msg'], 'danger'));
		unset($dado['email_logotipo']);
	  }
	}

	// Marca dagua - excluir
	if (isset($dado['midia_marcadagua_excluir']) AND ( (bool) $dado['midia_marcadagua_excluir'] == TRUE)) {
	  @unlink($this->dir_uploads . $_old->midia_marcadagua);
	  $dado['midia_marcadagua'] = NULL;
	  unset($dado['midia_marcadagua_excluir']);
	}

	// Marca dagua - enviar (error = 4: nenhum arquivo foi enviado)
	if (isset($_FILES['midia_marcadagua']) && $_FILES['midia_marcadagua']['error'] != 4) {
	  $gerenciadorMarcadagua = $this->gerenciador_m->upload('midia_marcadagua', $this->modulo->url);
	  if ($gerenciadorMarcadagua['status'] == TRUE) {
		@unlink($this->dir_uploads . $_old->midia_marcadagua);
		$dado['midia_marcadagua'] = $gerenciadorMarcadagua['upload']['file_name'];
	  } else {
		$this->session->set_flashdata('msgaux', alert($gerenciadorMarcadagua['msg'], 'danger'));
		unset($dado['midia_marcadagua']);
	  }
	}

	// Midia
	if ($this->usuario->id_grupo == 1) { // DBlinks
	  $dado['midia_mimetype'] = ((isset($dado['midia_mimetype'])) AND ( count($dado['midia_mimetype']) > 0)) ? implode('|', $dado['midia_mimetype']) : 'jpg|png|gif';
	}
	$dado['midia_padrao_redimensionar'] = isset($dado['midia_padrao_redimensionar']) ? $dado['midia_padrao_redimensionar'] : 0;
	$dado['midia_padrao_marcadagua'] = isset($dado['midia_padrao_marcadagua']) ? $dado['midia_padrao_marcadagua'] : 0;

	// Email
	isset($dado['email_senha']) ? $dado['email_senha'] = base64_encode($dado['email_senha']) : NULL;
	$dado['email_contato'] = trim(str_replace(' ', '', $dado['email_contato']));
	$dado['email_trabalhe'] = trim(str_replace(' ', '', $dado['email_trabalhe']));

	// Extra
	$dado['online'] = (isset($dado['online'])) ? $dado['online'] : 0;
	if ($this->usuario->id_grupo == 1) {
	  $dado['usuario_ativar'] = (isset($dado['usuario_ativar'])) ? $dado['usuario_ativar'] : 0;
	}

	// Segurança - DBlinks
	if ($this->usuario->id_grupo == 1) {
	  $dado['dbl_token'] = (isset($dado['dbl_token'])) ? $dado['dbl_token'] : NULL;
	}

	// Segurança
	$dado['site_ip_whitelist'] = isset($dado['site_ip_whitelist']) ? $dado['site_ip_whitelist'] : NULL;
	$dado['site_ip_blacklist'] = isset($dado['site_ip_blacklist']) ? $dado['site_ip_blacklist'] : NULL;
	$dado['admin_ip_whitelist'] = isset($dado['admin_ip_whitelist']) ? $dado['admin_ip_whitelist'] : NULL;
	$dado['admin_ip_blacklist'] = isset($dado['admin_ip_blacklist']) ? $dado['admin_ip_blacklist'] : NULL;

	$status = parent::update($dado, $dado['id']);
	return array('status' => $status);
  }

  function sitemap($status = FALSE, $id = 1) {
	$return = array();
	$return['status'] = parent::update(array('sitemap' => $status), $id);

	return $return;
  }

}
