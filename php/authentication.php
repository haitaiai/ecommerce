<?php 
include 'db-connect.php';

	$error = null;
	$username = null;
	$password = null;

	if (isset($_REQUEST['enter'])) {
		if (empty($_REQUEST['username']) || empty($_REQUEST['password'])) {
			//$error = ;
			echo "<script>alert('Username or Password invalid');";
			echo "window.location='../index.php';</script>";
		} else {
			$username = $_REQUEST['username'];
			$password = $_REQUEST['password'];
		}
}

	if (select * from user where username == $username) {
		if (select * from user where password == $password) {
			echo "<script>window.location='../index.php'</script>";
		}
	}


 ?>