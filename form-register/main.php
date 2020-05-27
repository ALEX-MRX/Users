<?php
	session_start();
	

	if(isset($_POST['login']) and isset($_POST['name']) and isset($_POST['password']) and isset($_POST['email'])){
		$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);

		$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);

		$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

		$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
	} else {
		echo "ERROR";
	}

	function check($l, $p, $e, $n) 
	{
		if(strlen($l) == 0) {
			echo "Вы ввели не коректный логин <br>";
			exit();
		} elseif(strlen($n) == 0) {
			echo "Вы ввели не коректный имя <br>";
			exit();
		} elseif(strlen($p) == 0) {
			echo "Вы ввели не коректный пароль <br>";
			exit();
		} elseif($e == false ) {
			echo "Вы ввели не коректный email <br>";
			exit();
		} else {

			$p = password_hash($p, PASSWORD_DEFAULT);
			require "connect.php";
			
			$mysql->query("INSERT INTO `users` (`login`, `password`, `email`, `name`) VALUES('$l', '$p', '$e', '$n')");

			$mysql->close();

			header('Location: /');
		}
	}


	check($login, $password, $email, $name);
?>