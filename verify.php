<?php
session_start();
$db_connection = pg_connect("host=ec2-174-129-220-12.compute-1.amazonaws.com port=5432 dbname=da92c70sm552i5 user=ssrokyoydqyfei password=a444cf799a4f5fb35284fa8442d4e831b25348ef1ac645da8a48c7449578984c");
$email=$_POST['email'];
$password=$_POST['password'];
$q = "SELECT * FROM users WHERE email = '$email'";
$r = pg_query($db_connection, $q);
$row = pg_fetch_assoc($r);
	if (password_verify($password, $row['password'])){
    $_SESSION['email'] = "user";
		header('Location: member-home.html');
	}
	else {
		header('Location: fail.php');
	}
?>
