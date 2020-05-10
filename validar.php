<?php 
session_star();
if(!isset($_session['administrador'])){
	if($_post['nombre']=="grupo2" && $_post[ 'contraseña']=="123"){
		$_session['administrador']=$_post['nombre'];
	}
	
}
if (isset($_session['administrador'])){
	header('location:index.html');;
}
	else{
		header ("location:index.html");
	}

?>
