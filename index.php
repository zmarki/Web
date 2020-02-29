<?php
	
	include('config.inc.php');

	if (isset($_POST['sub'])) {
		
		$vezeteknev=htmlspecialchars($_POST['veznev']);
		$keresztnev=htmlspecialchars($_POST['kernev']);
		$email=htmlspecialchars($_POST['mail']);
		$telefonszam=$_POST['tel'];
		$date=$_POST['szüldate'];
		$verseny=$_POST['versenyek'];
		$titulus=$_POST['titulus'];
		$keres=$sikeres;
		//include('index.tpl.php');
	}
	else {
		$keres=current($oldalak);
		if (isset($_GET['oldal'])) {
			if (isset($oldalak[$_GET['oldal']])) {
			$keres=$oldalak[$_GET['oldal']];
		}else {
			$keres=$hiba_oldal;
			header("HTTP/1.0 404 Not Found");
			}
		}
		//include('index.tpl.php');
	}
	include('index.tpl.php');
	
?>     