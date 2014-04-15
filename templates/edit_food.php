<?php	
	require('templates/db_connect.php');
	$query='SELECT * FROM goods';
	$sel=mysqli_query($dbh, $query);
	echo '<table>';
	while($row=mysqli_fetch_array($sel)){
		echo '<tr>
			  <td>'.$row['id'].'</td>
			  <td>'.$row['title'].'</td>
			  <td>'.$row['description'].'</td>
			  <td><img src="data://image/jpeg; base64,'.base64_encode($row['photo']).'" width=150px></td>
			  <td>'.$row['price'].'</td>
			  <td>'.$row['cat'].'</td>
			  ';
	}
	echo '</table>';
?>