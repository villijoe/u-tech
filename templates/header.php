<?php
	if(isset($_COOKIE['login']) && isset($_COOKIE['pass']) && isset($_COOKIE['email'])){
		$enter = $_COOKIE['login'];
	} else {
		$enter = 'Гость';
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Интернет магазин "Твои технологии"</title>
		<link href="css/index.css" rel="stylesheet" type="text/css" />
        <link rel="icon" href="img/favicon.ico">
	</head>
	<body>
<?php require('templates/db_connect.php') ?>
<?php require('templates/reduce.php') ?>
<div id="wrap">
	<div id="header">
		<div id="header_top">
			<ul id="navigation">
				<li><a href="/contacts.php">Контакты</a></li>
				<li><a href="/dostavka.php">Доставка и оплата</a></li>
				<li><a href="/feedback.php">Обратная связь</a></li>
                <li><a href="/admin.php">Вошел <strong><?php echo $enter; ?></strong></a></li>
			</ul>
            <div class="tels">(067) 564 50 31</div>
		</div>
		<div id="header_middle">
           	<h1><a href="/index.php">u-tech.hol.es</a></h1>
            <h4><a href="/index.php">интернет-магазин фонариков</a></h4>
            <form method="get" action="search.php">
              	<input type="text" name="q" 
                onfocus="this.value = '';" value="Поиск товаров" />
                <button>Найти</button>
            </form>
		</div>
		<div id="header_bottom">
			<ul id="nav">
               	<li><a href="/index.php">Главная</a></li>
                <li><a href="/goods.php">Каталог товаров</a></li>
            </ul>
		</div>
	</div>