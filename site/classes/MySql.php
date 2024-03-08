<?php
	
	class MySsql{

		private static $pdo;
		public static function conectar(){
			//Conectar à DB de maneira profissional
			if(self::$pdo == null){
				try{
				self::$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE,USER,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				}catch(Exception $e){
					echo 'ERRO AO CONECTAR';
				}
			}

			return self::$pdo;
		}
	}
?>