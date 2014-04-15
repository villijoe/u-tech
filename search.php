<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Интернет магазин "Твои технологии"</title>
		<link href="css/index.css" rel="stylesheet" type="text/css" />
		<link href="css/goods.css" rel="stylesheet" type="text/css" />
        <link rel="icon" href="img/favicon.ico">
	</head>
	<body>
		<?php require('templates/header.php') ?>
        <div id="base">
        
<?php
$search = $_GET['q'];
$search = preg_replace("[ ]", "%", $search);
if($search == ''){
	echo 'запрос не поставлен';
} else {
	$sel = mysqli_query($dbh, "SELECT * FROM goods WHERE title OR description LIKE '%$search%'");
			while ($row = mysqli_fetch_array($sel)){
					echo '<div class="goods">
						<a href="goods.php?p='.$row["title"].'"><h1>'.$row['title'].'</h1></a><br>
						<img src="data://image/jpeg; base64,'.base64_encode($row['photo']).'">
						<p>'.$row['description'].'</p><br>
						<h3>'.$row['price'].' грн.</h3><br>
						<h6>Категория: '.$row['cat'].'</h6></div>
					';	
			}	
}
?>

</div>
		<?php require('templates/footer.php') ?>
        <?php require('templates/copyright.html') ?>
	</body>
</html>	