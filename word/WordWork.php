<?php
	require_once 'SQLTool.php';
	header("Content-type: text/html; charset=utf-8");
	if(isset($_POST['enword'])){
		$en_word = $_POST['enword'];
	}else{
		echo "输入为空";
		echo "<a href='WordView.php'>返回</a>";
	}
	//只查询一条
	$sql = "select cnword from words where enword='".$en_word."' limit 0,1";

	$sqlTool = new SQLTool();

	$res = $sqlTool->execute_dql($sql);

	if($row=mysql_fetch_row($res)){
		echo $en_word." : ".$row[0];
	}else{
		echo "没有这个词条";
		echo "<a href='WordView.php'>返回</a>";
	}
	
	mysql_free_result($res);
?>