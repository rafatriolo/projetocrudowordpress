<?php
function produto_list () {
?>
<link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/rafa_triolo/style-admin.css" rel="stylesheet" />
<div class="wrap">
<h2>Produtos</h2>
<a href="<?php echo admin_url('admin.php?page=produto_create'); ?>" style="margin-bottom: 10px;">Adicionar Novo</a>
<?php
global $wpdb;
$rows = $wpdb->get_results("SELECT * from cadastroprodutos");
echo "<table class='wp-list-table widefat fixed' style='margin-top: 10px;'>";
echo "<tr><th>ID</th><th>Nome</th><th>Descrição</th><th>Preço</th></tr>";
foreach ($rows as $row ){
	echo "<tr>";
	echo "<td>$row->id</td>";
	echo "<td>$row->nome</td>";
	echo "<td>$row->descricao</td>";
	echo "<td>$row->preco</td>";
	echo "<td><a href='".admin_url('admin.php?page=produto_update&id='.$row->id)."'>Editar</a></td>";
	echo "</tr>";}
echo "</table>";
?>
</div>
<?php
}