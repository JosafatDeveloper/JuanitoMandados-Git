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
 * file: class/LOGIN.php
 * title: Login Class
 *
 *
 */
	trait LOGIN{
		public $LOGINUSER;
		public $LOGINPASS;
		public $LOGINSESSION;
		function __construct() {
	       $this->StartSession();
	    }
	    public function verifiqueUser($user, $pass){
		    $where = "WHERE user LIKE '".GetSQLValueString($user)."' AND pass LIKE '".GetSQLValueString(sha1($pass))."' AND act = 1";
		    if($this->sql_countBOOL($this->select_basic_count('user_a', $where))){
			    return true;
		    }else{
			    return false;
		    }
	    }
	    public function loginUser($user, $pass){
		    $where = "WHERE user LIKE '".GetSQLValueString($user)."' AND pass LIKE '".GetSQLValueString(sha1($pass))."' AND act = 1";
		    $array_result = $this->sql_basic_array($this->select_basic('id,user', 'user_a', $where, 'LIMIT 1'));
		    $this->CreateSession($array_result[0]['id'], $array_result[0]['user']);   
	    }
	}
	
?>