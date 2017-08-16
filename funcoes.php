<?php

function carrega_pagina() {

	$url = (isset($_GET['url'])) ? $_GET['url']: 'paginas/home.php';
	$url = array_filter(explode('/', $url));

	$file = ("paginas/".$url[0].".php");

	if(is_file($file)){
		include ($file);
	} else {
		include 'paginas/home.php';
	}
}


?>
