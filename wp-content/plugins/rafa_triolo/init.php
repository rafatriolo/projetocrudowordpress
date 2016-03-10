<?php
/*
Plugin Name: Rafael Triolo
Description: Este é um plugin de teste para o CRUD da Altran.
Version: 1.0
Author: Rafael Triolo

*/

//menu items
add_action('admin_menu','rafa_triolo_produto');
add_action('admin_menu','rafa_triolo_cliente');
add_action('admin_menu','rafa_triolo_pedidos');
function rafa_triolo_produto() {
	
	//this is the main item for the menu
	add_menu_page('Produtos', //page title
	'Produtos', //menu title
	'manage_options', //capabilities
	'produto_list', //menu slug
	'produto_list'//function
	);
	
	//this is a submenu
	add_submenu_page('produto_list', //parent slug
	'Adicionar Novo Produto', //page title
	'Adicionar Novo', //menu title
	'manage_options', //capability
	'produto_create', //menu slug
	'produto_create'); //function
	
	//this submenu is HIDDEN, however, we need to add it anyways
	add_submenu_page(null, //parent slug
	'Editar Produto', //page title
	'Editar', //menu title
	'manage_options', //capability
	'produto_update', //menu slug
	'produto_update'); //function
}

function rafa_triolo_cliente(){
	//this is the main item for the menu
	add_menu_page('Clientes', //page title
			'Clientes', //menu title
			'manage_options', //capabilities
			'cliente_list', //menu slug
			'cliente_list'//function
	);

	//this is a submenu
	add_submenu_page('cliente_list', //parent slug
			'Adicionar Novo Cliente', //page title
			'Adicionar Novo', //menu title
			'manage_options', //capability
			'cliente_create', //menu slug
			'cliente_create'); //function

	//this submenu is HIDDEN, however, we need to add it anyways
	add_submenu_page(null, //parent slug
			'Editar Cliente', //page title
			'Editar', //menu title
			'manage_options', //capability
			'cliente_update', //menu slug
			'cliente_update'); //function
}
function rafa_triolo_pedidos(){
	//this is the main item for the menu
	add_menu_page('Pedidos', //page title
			'Pedidos', //menu title
			'manage_options', //capabilities
			'pedidos_list', //menu slug
			'pedidos_list'//function
	);

	//this is a submenu
	add_submenu_page('pedidos_list', //parent slug
			'Adicionar Novo Pedido', //page title
			'Adicionar Novo', //menu title
			'manage_options', //capability
			'pedido_create', //menu slug
			'pedido_create'); //function

	//this submenu is HIDDEN, however, we need to add it anyways
	add_submenu_page(null, //parent slug
			'Editar Pedido', //page title
			'Editar', //menu title
			'manage_options', //capability
			'pedido_update', //menu slug
			'pedido_update'); //function
}
define('ROOTDIR', plugin_dir_path(__FILE__));
require_once(ROOTDIR . 'classes/produto/produto_list.php');
require_once(ROOTDIR . 'classes/produto/produto_create.php');
require_once(ROOTDIR . 'classes/produto/produto_update.php');
require_once(ROOTDIR . 'classes/cliente/cliente_list.php');
require_once(ROOTDIR . 'classes/cliente/cliente_create.php');
require_once(ROOTDIR . 'classes/cliente/cliente_update.php');
require_once(ROOTDIR . 'classes/pedidos/pedido_list.php');
require_once(ROOTDIR . 'classes/pedidos/pedido_create.php');
require_once(ROOTDIR . 'classes/pedidos/pedido_update.php');

