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
 * create:10-Enero-2016
 * file: controller/LoginController.php
 * title: Login Controller
 *
 *
 */
 
 // Requiere Class Login
 require_once 'LoginClass.php';
 require_once 'SessionClass.php';
 // Create Controller Class
 $self = new LOGIN;
 
 // return MSN
 $msn = '';
 
 // Get SESSION
 $SESSION = $self->SESSION;
 
 	// Function Controller
	if($SESSION->VerifySession()){
		$msn .= ', Login Access';
		header('Location: admin');
	}else{
		if(isset($_POST['user_user'])&&isset($_POST['user_pass'])){
			$user_user = $_POST['user_user'];
			$user_pass = $_POST['user_pass'];
			if($self->verifiqueUser($user_user, $user_pass)){
				$self->loginUser($user_user, $user_pass);
				$msn .= ', Login Correcte';
				header('Location: admin');
			}else{
				$msn .= ', No existe el user';
			}
		}else{
			$msn .= ', No Post';
		}
	}
	
?>