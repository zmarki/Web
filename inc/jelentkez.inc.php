<?php
	header('Content-type: text/htm; charset=utf-8');
	if (isset($_POST['sub'])) {
		
		$vezeteknev=htmlspecialchars($_POST['veznev']);
		$keresztnev=htmlspecialchars($_POST['kernev']);
		$email=htmlspecialchars($_POST['mail']);
		$telefonszam=$_POST['tel'];
		$date=$_POST['szüldate'];
		$verseny=$_POST['versenyek'];
		$titulus=$_POST['titulus'];
		
		if (empty($vezeteknev) || empty($keresztnev) || empty($email) || empty($telefonszam)) {
			header("Location: ../?oldal=jelentkez");
			exit();
		}
		else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-ZáéíóúöőüűÁÉÍÓÚÖŐÜŰ]*$/", $vezeteknev) && !preg_match("/^[a-zA-ZáéíóúöőüűÁÉÍÓÚÖŐÜŰ]*$/", $keresztnev)) {
			header("Location: ../?oldal=jelentkez");
			exit();
		}
		else if (!preg_match("/^[a-zA-ZáéíóúöőüűÁÉÍÓÚÖŐÜŰ]*$/", $vezeteknev) && !preg_match("/^[a-zA-ZáéíóúöőüűÁÉÍÓÚÖŐÜŰ]*$/", $keresztnev)) {
			header("Location: ../?oldal=jelentkez");
			exit();
		}
		else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z]*$/", $keresztnev)) {
			header("Location: ../?oldal=jelentkez");
			exit();
		}
		else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z]*$/", $vezeteknev)) {
			header("Location: ../?oldal=jelentkez");
			exit();
		}
		else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header("Location: ../?oldal=jelentkez");
			exit();
		}
		else if (!preg_match("/^[a-zA-ZáéíóúöőüűÁÉÍÓÚÖŐÜŰ]*$/", $vezeteknev)) {
			header("Location: ../?oldal=jelentkez");
			exit();
		}
		else if (!preg_match("/^[a-zA-ZáéíóúöőüűÁÉÍÓÚÖŐÜŰ]*$/", $keresztnev)) {
			header("Location: ../?oldal=jelentkez");
			exit();
			
		}
		else {
			session_start();
			$_SESSION['ok']=true;
			$_SESSION['vNev']=$vezeteknev;
			$_SESSION['kNev']=$keresztnev;
			$_SESSION['email']=$email;
			$_SESSION['tel']=$telefonszam;
			$_SESSION['date']=$date;
			$_SESSION['vers']=$verseny;
			$_SESSION['title']=$titulus;
			header('Location: ../?oldal=jelentkez');
			exit();
			}
			
	}
	else {
		header("Location: ../jelentkez.tpl.php");
		exit();
	}
	?>