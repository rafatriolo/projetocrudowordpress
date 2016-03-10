<?php
function pedido_create () {
$id = $_POST["id"];
$descricao = $_POST["descricao"];
$nome = $_POST["nome"];
$preco = $_POST["preco"];
//insert
if(isset($_POST['insert'])){
	global $wpdb;
	$wpdb->insert(
		'cadastroprodutos', //table
		array('id' => $id,'nome' => $nome , 'descricao' => $descricao , 'preco' => $preco) //data

	);
	$message.="School inserted";
}
?>
<link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/rafa_triolo/style-admin.css" rel="stylesheet" />
<div class="wrap">
<h2>Add New School</h2>
<?php if (isset($message)): ?><div class="updated"><p><?php echo $message;?></p></div><?php endif;?>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
<p>Three capital letters for the ID</p>
<table class='wp-list-table widefat fixed'>
<tr><th>Nome</th><td><input type="text" name="nome" value="<?php echo $nome;?>"/></td></tr>
<tr><th>Descrição</th><td><textarea name="descricao"><?php echo $descricao;?></textarea></td></tr>
<tr><th>Preço</th><td><input type="text" name="preco" value="<?php echo $preco;?>"/></td></tr>
</table>
<input type='submit' name="insert" value='Save' class='button'>
</form>
</div>
<?php
}