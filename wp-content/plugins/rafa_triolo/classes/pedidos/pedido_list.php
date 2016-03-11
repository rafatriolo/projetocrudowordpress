<?php
function pedidos_list () {
	?>
	<link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/rafa_triolo/style-admin.css" rel="stylesheet" />
	<div class="wrap">
		<h2>Produtos</h2>
		<a href="<?php echo admin_url('admin.php?page=produto_create'); ?>" style="margin-bottom: 10px;">Adicionar Novo</a>
		<?php
		global $wpdb;
		$rows = $wpdb->get_results(
				"SELECT * from cadastroprodutos as a INNER JOIN cadastroclientes as b INNER JOIN pedidos as c on c.id_produto=a.id AND c.id_cliente = b.id");
		echo "<table class='wp-list-table widefat fixed' style='margin-top: 10px;'>";
		echo "<tr><th>ID</th><th>Nome do Cliente</th><th>Nome do Produto</th><th>Preço</th></tr>";
		$datas = [];
		foreach ($rows as $row ){
			echo "<tr>";
			echo "<td>$row->id</td>";
			echo "<td>$row->nome_cliente</td>";
			echo "<td>$row->nome_produto</td>";
			echo "<td>$row->preco</td>";
			echo "<td><a href='".admin_url('admin.php?page=produto_update&id='.$row->id)."'>Editar</a></td>";
			echo "</tr>";}
		echo "</table>";
		?>
	</div>
	<?php
}