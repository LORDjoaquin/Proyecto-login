<?php
$error;
if(!empty($_POST['username']) && !empty($_POST['password'])){
	$username = $_POST['username'];
	$password=$_POST['password'];
	if($username=="cliente" && $password=="123"){
		header("Location:../cliente2.php");
		exit;
		echo "Accedido";
		$error="ok";	
	}else if($username=="admin" && $password=="asd"){
		echo "Accedido";
		$error="ok";	
			header("Location:../administrador.php");
	}else{
		$error="incorrecto";
			header("Location:../error_usuario.php");
			exit;
	}
}else{

	echo "no acceso";
}