<?php

	$mysqli = new MySQLi("localhost", "Manager", "hujun123@", "test");
	if($mysqli ->connect_errno){
		die($mysqli->connect_error);
	}

	$mysqli->autocommit(false);

	$sqli1 = "update account set balance=balance-2 where id = 1;";
	$sqli2 = "update account2 set balance=balance+2 where id = 2;";

	$b1 = $mysqli->query($sqli1);
	$b2 = $mysqli->query($sqli2);

	if(!$b1 || !$b2){
		echo "fail";
		$mysqli->rollback();
	}else{
		echo "succeed";
		$mysqli->commit();
	}
	$mysqli->close();
?>