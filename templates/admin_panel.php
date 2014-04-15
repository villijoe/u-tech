<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Панель администратора</title>
<style type="text/css">
#wrap {
	width: 65%;
	margin: 0 auto;
	height: auto;
	border: 1px solid black;
	padding: 10px;
}
</style>
</head>

<body>
<div id="wrap">
<?php 
	$code = $_GET['code'];
	switch($code){
	case '':
		echo '	<a href="index.php">На сайт</a><br>
				<a href="admin.php?code=add">Добавить товар</a><br>
				<a href="admin.php?code=edit">Редактировать товар</a><br>
				<a href="#">Изменить привилегии пользователей</a><br>';
		break; 
	case 'add':
		require('templates/add_food.php');
		break;
	case 'edit':
		require('templates/edit_food.php');
		break;
	case 'change':
		
		break;
	}
?>
</div>
</body>
</html>