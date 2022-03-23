<?php

if(!class_exists('Redux')) {
	return;
}

const options_name =  'malwee_settings';

function is_localhost(): bool {
	$whitelist = array('127.0.0.1', '::1');
	if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
		return true;
	}
	return false;
}

$theme = wp_get_theme();

$redux_args = array(
	'opt_name' => options_name,
	'display_name' => $theme->get('Name'),
	'display_version' => $theme->get('Version'),
	'menu_type' => 'menu',
	'allow_sub_menu' => true,
	'menu_title' => __('Opções do theme', 'malwee'),
	'page_title' => __('Opções do theme', 'malwee'),
	'dev_mode' => is_localhost(),
	'update_notice' => true,
	'customizer' => true,
	'page_parent' => 'themes.php',
	'page_permissions' => 'manage_options',
	'menu_icon' => 'dashicons-admin-appearance',
	'save_defaults' => false,
	'use_cdn' => true,
	'show_import_export' => false,
	'output'               => true,
	'output_tag'           => true,
	'page_slug'            => 'theme-options',
	'intro_text' => __('<p>Use as opções abaixo para personalizar o seu site.</p>', 'malwee')
);

Redux::set_args(options_name, $redux_args);

Redux::set_section(options_name, array(
	'title' =>  __('Contato', 'malwee'),
	'id' => 'contact_information',
	'desc' => __('Coloque as informações de contato.', 'malwee'),
	'icon' => 'el el-envelope',
));

Redux::set_section(options_name, array(
	'id' => 'contact_information_sub',
	'title' => __('Informações de contato', 'malwee'),
	'subsection' => true,
	'fields' => array(
		array(
			'id' => 'telefone',
			'title' => __('Telefone', 'malwee'),
			'type' => 'text'
		),
		array(
			'id' => 'email',
			'title' => __('E-mail', 'malwee'),
			'type' => 'text'
		),
		array(
			'id' => 'endereco',
			'title' => __('Endereço', 'malwee'),
			'type' => 'text'
		)
	)
));


Redux::set_section(options_name, array(
	'title' => __('Redes Sociais', 'malwee'),
	'id' => 'social',
	'description' => __('Insira os links das redes sociais existentes.', 'malwee'),
	'icon' => 'el el-laptop'
));

Redux::set_section(options_name, array(
	'id' => 'social_list',
	'title' => __('Lista de Redes Sociais', 'malwee'),
	'desc' => __('Insira os links das redes sociais existentes. Caso não possua alguma das listadas, basta deixar em branco.', 'malwee'),
	'subsection' => true,
	'fields' => array(
		array(
			'id' => 'link_facebook',
			'title' => __('Facebook', 'malwee'),
			'type' => 'text',
			'desc' => __('Link para o Facebook', 'malwee')
		),
		array(
			'id' => 'link_youtube',
			'title' => __('Youtube', 'malwee'),
			'type' => 'text',
			'desc' => __('Link para o Youtube', 'malwee')
		),
		array(
			'id' => 'link_instagram',
			'title' => __('Instagram', 'malwee'),
			'type' => 'text',
			'desc' => __('Link para o Instagram', 'malwee')
		),
		array(
			'id' => 'link_linkedin',
			'title' => __('LinkedIn', 'malwee'),
			'type' => 'text',
			'desc' => __('Link para o LinkedIn', 'malwee')
		),
	)
));

