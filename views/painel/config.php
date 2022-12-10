<h1>Configurações</h1>

<form method="POST" enctype="multipart/form-data">
	Titulo do Site:<br/>
	<input type="text" name="site_title" value="<?php echo $this->config['site_title']; ?>" /><br/><br/>

	Texto de boas vindas:<br/>
	<input type="text" name="home_welcome" value="<?php echo $this->config['home_welcome']; ?>" /><br/><br/>

	Template do site:<br/>
	<select name="site_template">
		<option value="default" <?php echo ($this->config['site_template']=='default')?'selected="selected"':''; ?>>Padrão</option>
		<option value="exemplo" <?php echo ($this->config['site_template']=='exemplo')?'selected="selected"':''; ?>>Versão de Natal</option>
	</select><br/><br/>

	Banner da página inicial:<br/>
	<input type="file" name="home_banner" /><br/><br/>

	<input type="submit" value="Salvar" />
</form>