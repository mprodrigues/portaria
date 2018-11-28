<?php
	require_once("../config/config.php");
	
	$sql = new Sql();

	$usuarios = $sql->select("SELECT * FROM usuarios WHERE ");

	echo json_encode($usuarios);
	
?>