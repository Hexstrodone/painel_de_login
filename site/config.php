<?php
	
	session_start();

	class Painel {
    	public static function logado() {
        	return isset($_SESSION['login']) ? true : false;
    	}
	}

	define('INCLUDE_PATH','http://localhost/site/');
	define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');
	//Conectar com banco de dados
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASSWORD', '');
	define('DATABASE', 'projeto_01');

	
?>