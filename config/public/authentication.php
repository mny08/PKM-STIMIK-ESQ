<?php
 	session_start(); 
	class authentication {
		var $table	= "user";
		var $dir	= "../../config/database.php";

		function login($email, $password) {
			session_start();
			include $this->dir;
			$data1 = mysqli_query($connection, "SELECT * FROM " . $this->table . " WHERE email='$email'");
			$data2 = mysqli_query($connection, "SELECT * FROM " . $this->table . " WHERE email='$email' AND password='$password'");

			if(mysqli_num_rows($data1) > 0) {
				if(mysqli_num_rows($data2) > 0) {
					$d = mysqli_fetch_array($data2);
					$_SESSION['user']  = $d['id'];
					$_SESSION['level'] = $d['level'];
					$_SESSION['email'] = $d['email'];
					$_SESSION['nama']  = $d['nama'];
					$_SESSION['message'] = "login-success";
					header("location:../../index.php");
				} else {
					header("location:../../pages/public/login.php");
					$_SESSION['message'] = "wrong-password";
				}	
			} else {
				header("location:../../pages/public/login.php");
				$_SESSION['message'] = "invalid-email";
			}
		}

		function logout() {
			include $this->dir;
			session_destroy();
 			session_start(); 
			$_SESSION['message'] = "logout-success";
			header("location:../../index.php");
		}
	}
?>