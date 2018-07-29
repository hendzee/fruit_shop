<?php
	include_once 'config.php';
	
	$user = $_POST['text_user'];
	$pass = $_POST['text_pass'];
	
	$res = 0;
	
	$ssql = "SELECT * FROM admin WHERE nama_admin='$user'";
	$query = mysql_query($ssql);
	$count = mysql_num_rows($query);
	
	if ($count > 0){
		$res+=1;
	}
	
	$ssql = "SELECT * FROM admin WHERE pass_admin='$pass'";
	$query = mysql_query($ssql);
	$count = mysql_num_rows($query);
	
	if ($count > 0){
		$res+=1;
	}
	
	if ($res > 1){
		$ssql = "SELECT * FROM admin";
		$query = mysql_query($ssql);
		$user = "";
		
		while($record=mysql_fetch_array($query)){
			$user = $record['nama_admin'];
		}
		
		$_SESSION['user'] = $user;
		header('location:admin/');
	}
	else{
		header('location:login-admin.php');
	}
?>