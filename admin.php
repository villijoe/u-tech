<link rel="stylesheet" type="text/css" href="css/style.css">
<?php
if((!(isset($_COOKIE['login'])) & (!(isset($_COOKIE['pass']))) & (!(isset($_COOKIE['email']))))){
	if(isset($_POST['login']) & isset($_POST['pass']) & isset($_POST['email'])){
		require('templates/db_connect.php');
		$login = $_POST['login'];
		$sel = mysqli_query($dbh, "SELECT * FROM users WHERE login LIKE '$login'");
			while ($row = mysqli_fetch_array($sel)){
				if(($_POST['login'] == $row['login']) & ($_POST['pass'] == $row['pass']) & ($_POST['email'] == $row['email'])){
					setcookie("login", $_POST['login'], time()+3600);
					setcookie("pass", $_POST['pass'], time()+3600);
					setcookie("email", $_POST['email'], time()+3600);
				}
			}
		if($_COOKIE['login'] == 'admin'){
			require('templates/admin_panel.php');
		} else {	
			if($_COOKIE['login']=='admin'){
				header("Location: admin.php");
			} else {
				header("Location: admin.php");
			}
		}
	} else {
		require('templates/admin_form.php');	
	}
} else {
	if($_COOKIE['login'] == 'admin'){
		require('templates/admin_panel.php');
	} else {	
		header("Location: index.php");
	}
}
?>