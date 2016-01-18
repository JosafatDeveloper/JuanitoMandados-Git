<?php
/*
 *
 *
 * Juanito te hace los mandados
 * version: 1.0
 * site:juanitomandados.com
 * proyect:Sistema de pedidos multiples
 * autor:Josafat M. Vargas Origuela
 * developer:Josafat M. Vargas Origuela
 * create:9-Enero-2016
 * file: index.php
 * title: Login admin
 *
 *
 */
 	//Header UTF-8
 	header('Content-Type: text/html; charset=UTF-8'); // UTF-8 Header
 	// Requiere Admin Controller master LOAD()
	require_once 'controllers/LoginController.php';
?>
<html>
	<head>
		<title>Login Admin</title>
	</head>
	<body>
		<form action="#" method="post">
			<input name="user_user" placeholder="Usuario"><br>
			<input name="user_pass" placeholder="Contraseña"><br>
			<input type="submit" value="Entrar"><br>
		</form>
		<?php echo $_POST['user_user'] ?>
		<h4><?php echo $msn ?></h4>
	</body>
</html>
