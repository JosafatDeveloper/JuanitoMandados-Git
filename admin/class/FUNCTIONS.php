<?php
	/**
	* Functions Class
	*/
	class FUNCTIONS{
		public function GetSQLValueString($value){
			return get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
		}
	}
	
?>