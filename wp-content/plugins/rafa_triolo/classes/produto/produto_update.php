<?php
function produto_update () {
global $wpdb;
$id = $_GET["id"];
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
//update
if(isset($_POST['update'])){	
	$wpdb->update(
		'cadastroprodutos', //table
		array(
			'nome' => $nome,
			'descricao' => $descricao,
			'preco' => $descricao,

		), //data
		array( 'id' => $id ) //where

	);
}
//delete
else if(isset($_POST['delete'])){	
	$wpdb->query($wpdb->prepare("DELETE FROM cadastroprodutos WHERE id =%d",$id));
}
else{//selecting value to update	
	$schools = $wpdb->get_results($wpdb->prepare("SELECT * from cadastroprodutos where id=%d",$id));
	foreach ($schools as $s ){
		$nome=$s->nome;
		$descricao = $s->descricao;
		$preco = $s->preco;
	}
}
?>
<link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/rafa_triolo/style-admin.css" rel="stylesheet" />
<div class="wrap">
<h2>Schools</h2>

<?php if($_POST['delete']){?>
<div class="updated"><p>O produto foi deletado</p></div>
<a href="<?php echo admin_url('admin.php?page=produto_list')?>">&laquo; Voltar para Lista de Produtos</a>

<?php } else if($_POST['update']) {?>
<div class="updated"><p>Produto atualizado com sucesso</p></div>
<a href="<?php echo admin_url('admin.php?page=produto_list')?>">&laquo;  Voltar para Lista de Produtos</a>

<?php } else {?>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
<table class='wp-list-table widefat fixed'>
<tr><th>Nome</th><td><input type="text" name="nome" value="<?php echo $nome;?>"/></td></tr>
<tr><th>Descrição</th><td><textarea name="descricao"><?php echo $descricao;?></textarea></td></tr>
<tr><th>Preço</th><td><textarea name="preco"><?php echo $preco;?></textarea></td></tr>
</table>
<input type='submit' name="update" value='Save' class='button'> &nbsp;&nbsp;
<input type='submit' name="delete" value='Delete' class='button' onclick="return confirm('Você tem certeza que deseja deletar o produto?')">
</form>
<?php }?>

</div>
<?php
}