<?php

	include('../config.php');
	include('../classes/MySql.php');


	if(Painel::logado() == false){
		include('login.php');
	}else{
		include('main.php');
	}

?>