<?php

/**
* QUERY class
*/
trait QUERY{
	public function select_basic($rows='*', $table, $where, $limit){
		return 'SELECT '.$rows.' FORM '.$table.' '.$where.' '.$limit;
	}
	public function select_basic_count($table, $where){
		return 'SELECT COUNT(*) FORM '.$table.' '.$where;
	}
}
	
?>