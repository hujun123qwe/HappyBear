<?php

	//Ô¤´¦Àí
	$mysqli = new MySQLi("localhost", "Manager", "hujun123@", "test");

	if(mysqli_connect_errno()){
		die(mysqli_connect_error());
	}

	$sql = "select id, name, genda from user1 where id < ?;";
	$mysqli_stmt = $mysqli->prepare($sql);

	$id = 5;
	$name = "";
	$genda = "";
	$mysqli_stmt -> bind_param("i", $id);
	$mysqli_stmt -> bind_result($id, $genda, $name);

	$mysqli_stmt->execute();
	while($mysqli_stmt->fetch()){
		echo "<br/>--$id--$name--$genda";
	}

	$mysqli_stmt->free_result();
	$mysqli_stmt->close();

?>