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
 
 // Create Controller Class
 $self = new LOGIN;
 
 /*
 	// Requiere
 	if(file_exists('../class/ADMINKIT.php')){
	 	require_once('../class/ADMINKIT.php');
 	}else{
	 	require_once 'class/ADMINKIT.php';
 	}
 	
 	// Controller
	$controller = new ADMINKIT;
	// Vars
	$msn = '';
	
	
	
	// Function Controller
	if($controller->VerifySession()){
		$msn .= ', Login Access';
		header('Location: admin.php');
	}else{
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(isset($_REQUEST['user_user'])&&isset($_REQUEST['user_pass'])){
				$user_user = $_REQUEST['user_user'];
				$user_pass = $_REQUEST['user_pass'];
				if($controller->verifiqueUser($user_user, $user_pass)){
					$controller->loginUser($user_user, $user_pass);
					$msn .= ', Login Correcte';
					header('Location: admin.php');
				}else{
					$msn .= ', No existe el user';
				}
			}else{
				$msn .= ', No Post correctos';
			}
		}else{
			$msn .= ', No Post';
		}
	}
	*/

?>