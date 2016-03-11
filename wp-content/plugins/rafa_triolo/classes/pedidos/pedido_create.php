<?php
function pedido_create () {
$id = $_POST["id"];
$id_produto = $_POST["produto"];
$id_cliente = $_POST["cliente"];
//insert
if(isset($_POST['insert'])){
	global $wpdb;
	$wpdb->insert(
		'cadastroprodutos', //table
		array('id' => $id,'nome' => $nome , 'descricao' => $descricao , 'preco' => $preco) //data

	);
	$message.="";
}
?>
<link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/rafa_triolo/style-admin.css" rel="stylesheet" />
<div class="wrap">
<h2>Add New School</h2>
<?php if (isset($message)): ?><div class="updated"><p><?php echo $message;?></p></div><?php endif;?>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
<table class='wp-list-table widefat fixed'>
<tr><th>Nome</th><td>
		<input type="text" name="nome" value="<?php echo $nome;?>"/>
		<label>Selecione para qual cliente deseja comprar </label>
		<select class="form-control" name="cliente" >
			<?php foreach($pega_clientes as $cliente ):?>
				<option value="<?php echo $cliente->id ?>"><?php echo $cliente->nome_cliente ?> </option>
			<?php endforeach; ?>
		</select>

	</td></tr>
<tr><th>Descrição</th><td><textarea name="descricao"><?php echo $descricao;?></textarea></td></tr>
<tr><th>Preço</th><td><input type="text" name="preco" value="<?php echo $preco;?>"/></td></tr>
</table>
<input type='submit' name="insert" value='Save' class='button'>
</form>
</div>
<?php
}