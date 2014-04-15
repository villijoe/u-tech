<?php	
	require('templates/db_connect.php');
	if(isset($_POST['title'])){
		$title=$_POST['title'];
		$desc=$_POST['description'];
		$price=$_POST['price'];
		$cat=$_POST['cat'];
		$query='INSERT INTO goods(title,description,price,cat) VALUES ("'.$title.'","'.$desc.'","'.$price.'","'.$cat.'")';
		mysqli_query($dbh, $query);
	} else {
		echo '
			<form method="post" action="admin.php?code=add">
			<h1>Добавить товар</h1>
			Названия товара:<input type="text" name="title"><br> 
			Фото товара:<br> 
			Описание товара:<textarea name="description"></textarea><br> 
			Цена:<input type="text" name="price"><br> 
			Категория:<select name="cat"><option name="Фонарики">Фонарики</option></select><br> 
			<button>Добавить</button>
			</form>
		';
	}
?>