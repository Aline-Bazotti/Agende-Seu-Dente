<?php

// Protocolo de envio de email
$config['email_protocolo'] = array(
	'mail' => 'Mail (PHP)',
	'smtp' => 'SMTP (Autenticado)',
	'sendmail' => 'Sendmail'
);

// Tipo de email para envio
$config['email_tipo'] = array(
	'html' => 'HTML',
	'text' => 'Texto'
);

// Protocolo de seguança para envio de emailSeguran de email para envio
$config['email_seguranca'] = array(
	'' => 'Nenhuma',
	'ssl' => 'SSL',
	'tls' => 'TLS/STARTTLS'
);

// Prioridade de email
$config['email_prioridade'] = array(
	1 => '1 - Alta',
	2 => '2 - Média',
	3 => '3 - Baixa'
);

// Tipo de mapa Google Maps
$config['gm_tipo'] = array(
	'ROADMAP' => 'Estrada',
	'SATELLITE' => 'Satélite',
	'HYBRID' => 'Híbrido',
	'TERRAIN' => 'Terreno'
);

// Contas do Google Analytics
$config['ga_conta'] = array(
	'dblinks@gmail.com' => 'dblinks@gmail.com',
	'dblinksa@gmail.com' => 'dblinksa@gmail.com'
);