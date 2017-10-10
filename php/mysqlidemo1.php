<?php
	//mysqli有两种方式一种是面向对象方式，一种是面向过程方式
	//面向对象风格

	//1.创建MySQLi对象

	$mysqli = new MySQLi("localhost", "Manager", "hujun123@", "test");
	if($mysqli->connect_error){
		die("error: ".$mysqli->connect_error);
	}else{
		echo "succeed<br/>";
	}

	//2.操作数据库（发送SQL）

	$sql = "select * from user1";
	$res = $mysqli->query($sql);
	var_dump($res);
	echo "<br/>";

	//3.处理结果

	while($row = $res->fetch_row()){
		foreach($row as $key=>$value){
			echo "--$value";
		}
		echo "<br/>";
	}

	//批量添加
	$sqlis = "insert into user1 (name, genda) values('John', 'boy');";
	$sqlis.= "insert into user1 (name, genda) values('Ying', 'girl');";
	$b = $mysqli->multi_query($sqlis);
	if(!$b){
		echo "fail insert <br/>".$mysql->error;
	}else{
		echo "insert succeed <br/>";
	}

	//4.关闭资源

	$res->free();	//释放内存
	$mysqli->close();	//关闭连接

	
	
?>