<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Интернет магазин "Твои технологии"</title>
		<link href="css/index.css" rel="stylesheet" type="text/css" />
        <link href="css/feedback.css" rel="stylesheet" type="text/css" />
        <link rel="icon" href="img/favicon.ico">
	</head>
	<body>
		<?php require('templates/header.php') ?>
            <div class="container_feedback">
            	<h1>Обратная связь</h1>
                <div id="line"></div>
                <?php
					if($_POST['submit']){
						// get data form feedback.php in relevant variables
						$name = $_POST['name'];
						$from = $_POST['email'];
						$title = $_POST['title'];
						$message = $_POST['message'];
				
						$to = 'joe_joe_barabanshi@mail.ru';
				
						mail($to, $title, $title, 'From:'.$from);
						echo '<div class="send">
							Thank you! You email send.</div>';
					}
				?>
                <p>Вы можете отправить нам запрос по электронной почте с помощью следующей формы.</p>
                <form method="post" action="">
                	Имя:<br>
                    <input type="text" name="name" /><br>
                    Email:<br>
                    <input type="text" name="email" /><br>
                    Тема:<br>
                    <input type="text" name="title" /><br>
                    Сообщение:<br>
                    <textarea name="message"></textarea><br>
                    <input type="submit" value="OK" name="submit" />
                </form>
            </div>
		<?php require('templates/footer.php') ?>
        <?php require('templates/copyright.html') ?>
	</body>
</html>