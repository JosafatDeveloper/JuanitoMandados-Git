<?php
	
/**
* SQL class
*/
require_once 'ConectClass.php';
class SQL extends CONECT{
	public function sql_basic($query){

	}
	public function sql_basic_array($query){
		$query_result = mysql_query($query);
		$array_return = array();
		while($row = mysql_fetch_array($query_result)){
			$array_return[]=$row;
		}
		return $array_return;
	}
	public function sql_count($query){
		
	}
	public function sql_countBOOL($query){
		$query_result = mysql_query($query);
		while($row = mysql_fetch_array($query_result)){
			return true;
		}
		return false;
	}
}

?>