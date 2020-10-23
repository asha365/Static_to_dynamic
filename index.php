<?php
	if(!isset($_GET['page'])){
		header('Location:index.php?page=home');
	}else{
		$pg = $_GET['page'];
	}
?>

<?php 
	include 'nc/Header.php';
	//include 'nc/Menu.php';
	if(isset($pg)){
		include 'files/'.$pg.'.php';
	}
	include 'nc/Footer.php';
?>