<?php
	require_once 'FUNCTIONS.php';
	require_once 'CONECT.php';
	require_once 'SESSION.php';
	require_once 'LOGIN.php';
	require_once 'QUERY.php';
	require_once 'SQL.php';
	/**
	* ADMIN KIT LIBRARY
	*/
	
	class ADMINKIT extends FUNCTIONS {
		use CONECT, SESSION, LOGIN, QUERY, SQL;
		function __construct(){
			
		}
	}
	
?>