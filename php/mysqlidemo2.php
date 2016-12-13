<?php
	//使用mysqli->multi_query一次性查询并显示内容
	$mysqli = new MySQLi("localhost", "Manager", "hujun123@", "test");
	$sqlis = "select * from user1;";
	$sqlis.="select * from words;";

	if($res = $mysqli->multi_query($sqlis)){
		do{
			$result = $mysqli->store_result();
			while($row = $result->fetch_row()){
				foreach($row as $key=>$values){
					echo "--$values";
				}
				echo "<br/>";
			}
			$result->free();
			if(!$mysqli->more_results()){
				break;
			}
			echo "<br/>******新的结果集******<br/>";
		}while( $mysqli -> next_result() );
	}

	
?>