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
 
 	require_once 'FunctionsClass.php';
 	require_once 'SessionClass.php';
 	require_once 'QueryClass.php';
	class LOGIN extends FUNCTIONS{
		use QUERY;
		function __construct() {
			// SubClass extends
			$this->SESSION = new SESSION;
			// Star Class
	        $this->SESSION->StartSession();
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
		    $this->SESSION->CreateSession($array_result[0]['id'], $array_result[0]['user']);   
	    }
	}
	
?>

class B {
    public function method_from_b($s) {
    	echo $s;
    }
}

class C {
    public function method_from_c($s) {
    	echo $s;
    }
}

class A extends B
{
  private $c;

  public function __construct()
  {
    $this->c = new C;
  }

  // fake "extends C" using magic function
  public function __call($method, $args)
  {
    $this->c->$method($args[0]);
  }
}


$a = new A;
$a->method_from_b("abc");
$a->method_from_c("def");