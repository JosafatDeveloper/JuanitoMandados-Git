<?php
	/**
	* Functions Class
	*/
	require_once 'SQLClass.php';
	class FUNCTIONS extends SQL{
		public function GetSQLValueString($value){
			return get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
		}
	}
	
?>