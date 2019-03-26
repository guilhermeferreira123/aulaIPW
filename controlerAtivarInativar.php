<?php
	include ("Noticia.php");
	$listarNoticia = new Noticia();
	$id = filter_input(INPUT_)
	$situacao= filter_input (INPUT_GET,"situacao");
	
	$listarNoticia->ativarInativar($id,$situacao)
	?>