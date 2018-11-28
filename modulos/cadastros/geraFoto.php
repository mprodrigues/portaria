<?php
	
	require_once ("../../conn/config.php");

	
	//$_POST['nomeVisitante'];
	//$_POST['dataNasc'];

	$data = $_POST['file'];

	list($type, $data) = explode(';', $data);
	list($base, $data) = explode(',', $data);

	$nome_img = md5(time()).".png";

	$data = base64_decode($data);
	//echo "DATA QUE SERIA A IMAGEM :::: ".$data;
	//echo exec('whoami');
	file_put_contents("../../imagens/img_visitantes/".$nome_img, $data);
	/*//Decodifica base64
	$imageBin = base64_decode(file_get_contents());
	
	echo 'Primeiro ECHO'.$imageBin;
	//Grava o arquivo decodificado em um temporário
	$tmpfname = tempnam(sys_get_temp_dir(), 'base64_decode_');*/
	

?>