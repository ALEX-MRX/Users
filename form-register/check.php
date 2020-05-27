<?php 
	session_start();
	
	if(isset($_POST['login']) and isset($_POST['password'])){
		$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
		$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
	} else {
		echo "ERROR";
	}
	
	
	require "connect.php";
	$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'");
	if(mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_array($result)) {
			if(password_verify($password, $row['password'])) {
				$_SESSION['login'] = $row['login'];
				$_SESSION['id'] = $row['id'];
			} else {
				
				echo "<h1>Пароль неверный</h1>";
			}
		}
	}
	header('Location: /');
	$mysql->close();
	

?>