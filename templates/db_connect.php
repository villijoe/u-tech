<?php
$dbh = mysqli_connect('mysql.hostinger.com.ua', 'u556101026_villi', 'h1a2l3f4') or die('Cannot connect to database');
mysqli_select_db($dbh, 'u556101026_foo') or die('Cannot select database');
?>