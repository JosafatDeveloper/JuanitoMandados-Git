<?php

/**
* QUERY class
*/
trait QUERY{
	public function select_basic($rows='*', $table, $where, $limit){
		return 'SELECT '.$rows.' FROM '.$table.' '.$where.' '.$limit;
	}
	public function select_basic_count($table, $where){
		return 'SELECT COUNT(*) FROM '.$table.' '.$where;
	}
}
	
?>