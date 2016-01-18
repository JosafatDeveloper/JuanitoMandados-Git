<?php
	/**
	* Conect Class
	*/
	class CONECT{
		public function conectBD(){
			require_once ('../Connections/JTHConnect.php');
			// Conect Mysql
			mysql_select_db($database_JHM, $JHM_bd) or die("no se puede seleccionar la bd");
		}
		public function closeBD(){
	    	mysql_close();
	    }
	}	
?>