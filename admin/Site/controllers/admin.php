<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Admin_Controller {

  private $validation_site = array(
	  array(
		  'field' => 'desc_site',
		  'label' => 'Site',
		  'rules' => 'required|trim'
	  ),
	  array(
		  'field' => 'descricao',
		  'label' => 'Descrição',
		  'rules' => 'required|trim'
	  ),
	  array(
		  'field' => 'palavras_chave',
		  'label' => 'Palavras-chave',
		  'rules' => 'required|trim'
	  ),
	  array(
		  'field' => 'email',
		  'label' => 'E-mail',
		  'rules' => 'required|trim|valid_mail'
	  ),
	  array(
		  'field' => 'logradouro',
		  'label' => 'Logradouro',
		  'rules' => 'required|trim'
	  ),
	  array(
		  'field' => 'numero',
		  'label' => 'Número',
		  'rules' => 'required|trim'
	  ),
	  array(
		  'field' => 'logradouro',
		  'label' => 'Logradouro',
		  'rules' => 'required|trim'
	  ),
	  array(
		  'field' => 'email_contato',
		  'label' => 'E-mail Contato',
		  'rules' => 'trim|valid_mail'
	  ),
	  array(
		  'field' => 'email_trabalhe',
		  'label' => 'E-mail Trabalhe',
		  'rules' => 'trim|valid_mail'
	  ),
	  array(
		  'field' => 'url',
		  'label' => 'Site',
		  'rules' => 'trim|prep_url'
	  ),
	  array(
		  'field' => 'url_webmail',
		  'label' => 'Webmail',
		  'rules' => 'trim|prep_url'
	  )
  );

  function __construct() {
	parent::__construct();

	$this->load->model('site/site_m');
	$this->load->model('gerenciador_m');

	$this->load->config('site');

	$this->load->library('upload');
  }

  #############
  ## ALTERAR ##
  #############

  public function index() {
	$registro = $this->site_m->get_id(1);

	// Dados recebidos
	if ($this->input->post()) {
	  $this->form_validation->set_rules($this->validation_site);

	  if ($this->form_validation->run()) {
		$update = $this->site_m->update($this->input->post());
		if ($update['status']) {
		  $this->session->set_flashdata('msg', alert((isset($update['msg'])) ? $update['msg'] : $this->lang->line('alterar_sucesso'), 'success'));
		  redirect(admin_url($this->modulo->url));
		} else {
		  $this->template->write('msg', alert((isset($update['msg'])) ? $update['msg'] : $this->lang->line('alterar_erro'), 'danger'));
		}
	  } else {
		$this->template->write('msg', alert(validation_errors(), 'danger'));
	  }
	}

	// Mimes permitidos para upload
	$this->upload->mimes_types(NULL);
	foreach ($this->upload->mimes as $mk => $mv) {
	  $mm[$mk] = $mk;
	}
	$registro->mimes_types = $mm;

	$this->template->write_view('conteudo', 'admin/form', $registro);
	$this->template->render();
  }

}
