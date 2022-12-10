<form method="POST">
	E-mail:<br/>
	<input type="email" name="email" /><br/><br/>

	Senha:<br/>
	<input type="password" name="senha" /><br/><br/>

	<input type="submit" value="Entrar" /><br/><br/>

	<?php
	if(!empty($erro)) {
		echo $erro;
	}
	?>
</form>