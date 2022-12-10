<h1>Menus</h1>

<a href="<?php echo BASE; ?>painel/menus_add">Adicionar Menu</a><br/><br/>

<table border="0" width="100%">
	<tr>
		<th align="left">ID</th>
		<th align="left">Nome</th>
		<th align="left">URL</th>
		<th align="left">Ações</th>
	</tr>
	<?php foreach($menus as $menu): ?>
	<tr>
		<td><?php echo $menu['id']; ?></td>
		<td><?php echo utf8_encode($menu['nome']); ?></td>
		<td><?php echo utf8_encode($menu['url']); ?></td>
		<td>
			<a href="<?php echo BASE; ?>painel/menus_edit/<?php echo $menu['id']; ?>">Editar</a> - <a href="<?php echo BASE; ?>painel/menus_del/<?php echo $menu['id']; ?>">Excluir</a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>