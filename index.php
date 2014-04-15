<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Интернет магазин "Твои технологии"</title>
		<link href="css/index.css" rel="stylesheet" type="text/css" />
        <link rel="icon" href="img/favicon.ico">
	</head>
	<body>
		<?php require('templates/header.php') ?>
			<div class="container1">
               	<?php
					$title = 'CREE XM-L T6 1800 Lm';
					$sel = mysqli_query($dbh, 'SELECT * FROM goods');
					while ($row = mysqli_fetch_array($sel)){
						if($row['title'] == $title){
							echo '
								<img src="data://image/jpeg; base64,'.base64_encode($row['photo']).'">
								<div id="info">
								<a href="goods.php?p='.$row["title"].'">'.$row['title'].'</a><br>
								'.reduce($row['description'],796).'<br>
								<div id="price">Цена: '.$row['price'].' грн.</div>
								</div>
							';
						}
					}
				?>
            </div>
            <br>
            <?php
				echo '<div id="con_hits">';
				$sel = mysqli_query($dbh, 'SELECT * FROM goods');
				//$i=1;
				while ($row = mysqli_fetch_array($sel) /*OR $i<=5*/){
					//$i++;
					echo '
						<div class="hits">
							<img src="data://image/jpeg; base64,'.base64_encode($row['photo']).'">
							<a href="goods.php?p='.$row["title"].'">'.$row['title'].'</a><br>
							<p>Цена: <b>'.$row['price'].' грн.</b></p>
						</div>
					';
				}
			?>
                <div class="hits"></div>
                <div class="hits"></div>
                <div class="hits"></div>
            </div>
            <div class="container2">
            	<h1>Фонарики</h1>
                <div id="text">Первые стробоскопы представляли собой источник света с помещённым перед ним 
                	обтюратором: двумя непрозрачными дисками — неподвижным и вращающимся — с узкими прорезями. 
                	Когда прорези совмещались, исследуемый с помощью стробоскопа объект освещался. В современных 
                	стробоскопах используются газоразрядные импульсные лампы, а также импульсные лазеры.
					<br><br>
                	С появлением в последнее время ярких и сверхъярких светодиодов их также стали успешно применять в стробоскопах.
                </div>
            </div>
		<?php require('templates/footer.php') ?>
        <?php require('templates/copyright.html') ?>
	</body>
</html>