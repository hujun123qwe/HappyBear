<?php
	//mysqli�����ַ�ʽһ�����������ʽ��һ����������̷�ʽ
	//���������

	//1.����MySQLi����

	$mysqli = new MySQLi("localhost", "Manager", "hujun123@", "test");
	if($mysqli->connect_error){
		die("error: ".$mysqli->connect_error);
	}else{
		echo "succeed<br/>";
	}

	//2.�������ݿ⣨����SQL��

	$sql = "select * from user1";
	$res = $mysqli->query($sql);
	var_dump($res);
	echo "<br/>";

	//3.������

	while($row = $res->fetch_row()){
		foreach($row as $key=>$value){
			echo "--$value";
		}
		echo "<br/>";
	}

	//�������
	$sqlis = "insert into user1 (name, genda) values('John', 'boy');";
	$sqlis.= "insert into user1 (name, genda) values('Ying', 'girl');";
	$b = $mysqli->multi_query($sqlis);
	if(!$b){
		echo "fail insert <br/>".$mysql->error;
	}else{
		echo "insert succeed <br/>";
	}

	//4.�ر���Դ

	$res->free();	//�ͷ��ڴ�
	$mysqli->close();	//�ر�����

	
	
?>