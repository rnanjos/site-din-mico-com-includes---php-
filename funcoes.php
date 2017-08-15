<?php

function carrega_pagina(){
	(isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';
	if(file_exists('paginas/'.$pagina.'php')):
		require_once('paginas/'.$pagina.'php');
	else:
		require_once('paginas/home.php');
	endif;
}


?>