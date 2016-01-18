<?php
	/**
	* Conect Class
	*/
	class CONECT{
		public function conectBD(){
			// Conect Mysql
			require_once ('Connections/JTHConnect.php');
			mysql_select_db($database_dqm, $dqm_bd) or die("no se puede seleccionar la bd");
		}
		public function closeBD(){
	    	mysql_close();
	    }
	}	
?>