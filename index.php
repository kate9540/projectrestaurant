<?php session_start();

if (!isset($_SESSION['nombreusuario'])) {
	header('location:views/login/login.php');
}else{

	require_once 'model/enlaces.php';
	require_once 'model/reservasmodel/reservasmodel.php';
	require_once 'model/usuariosmodel/usuariosmodel.php';
	require_once 'model/categoriasmodel/categoriasmodel.php';
	require_once 'model/productosmodel/productosmodel.php';
	

	require_once 'controller/reservascontroller/reservascontroller.php';
	require_once 'controller/usuarioscontroller/usuarioscontroller.php';
	require_once 'controller/categoriascontroller/categoriascontroller.php';
	require_once 'controller/productoscontroller/productoscontroller.php';
	

	$index = new MvcController();
	$index->plantilla();
}


