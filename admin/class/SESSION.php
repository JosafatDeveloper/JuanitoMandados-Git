<?php
	class SESSION{
		public function CreateSession($id_user, $user_name){
			$_SESSION['user_session'] = true;
			$_SESSION['user_session_id'] = $id_user;
			$_SESSION['user_session_user'] = $user_name;
		}
		public function VerifySession(){
			if(isset($_SESSION['user_session'])){
				return true;
			}else{
				return false;
			}
		}
		public function StartSession(){
			session_start();
			if(isset($_SESSION['user_session'])){
				return true;
			}else{
				return false;
			}
		}
		public function DestroySession(){
			// remove all session variables
			session_unset(); 
			// destroy the session 
			session_destroy();
		}
	}
	