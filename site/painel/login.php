<!DOCTYPE html>
<html>
<head>
	<title>Painel de Controle</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo INCLUDE_PATH_PAINEL ?>CSS/style.css" rel="stylesheet" >
	
</head>
<body>

	<div class="box-login">
		<?php
			if (isset($_POST['acao'])) {
				$user = $_POST['user'];
				$password = $_POST['password'];
				$sql = MySsql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ?");
				$sql->execute(array($user,$password));
				$result = $sql->fetchALL();
				if(count($result) == 1){
					//Logamos com sucesso.
					$_SESSION['login'] = true;
					$_SESSION['user'] = $user;
					$_SESSION['password'] = $password;
					header('location: '.INCLUDE_PATH_PAINEL);
					die();
				}else{
					//Falhou
					echo '<div class="erro-box">Usuário ou senha incorretos!</div>';
				}
			}
		?>
		<h2>Efetue o login:</h2>
		<form method="post">
			<input type="text" name="user" placeholder="Usuario" required>
			<input type="password" name="password" placeholder="Senha" >
			<input type="submit" name="acao" value="Logar!">
		</form>

	</div><!--box-login-->

</body>
</html>