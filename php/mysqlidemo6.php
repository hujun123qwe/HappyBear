<?php

	function showTable($table_name){
		$mysqli = new MySQLi("localhost", "Manager", "hujun123@", "test");

		if(mysqli_connect_errno()){
			die(mysqli_connect_error());
		}
		
		$sql = "select * from $table_name;";

		$res = $mysqli->query($sql);

		echo "共有行".$res->num_rows."--列".$res->field_count;
		echo "<br/>";

		//从$res取表头
		echo "<table border='1'><tr>";
		while($field = $res->fetch_field()){
			echo "<th>{$field->name}</th>";
		}
		
		echo "</tr>";
		
		while($row=$res->fetch_row()){
			echo "<tr>";
			foreach($row as $value){
				echo "<td>$value</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
		$res->free();
		$mysqli->close();
	}

	showTable("user1");
?>
