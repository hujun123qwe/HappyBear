<?php
	$grades = $_REQUEST['grades'];
	echo $grades;
	echo "<br>";
	//拆分
	$grades = explode(" ", $grades);
	$sum = 0;
	foreach($grades as $key=> $v){
		echo $key."=".$v;
		echo "<br>";
		//隐藏转换
		$sum += $v;
	}
	echo "<br>";
	echo $sum;
	echo "<br>";
	//保留两位小数
	echo round($sum/count($grades), 2);
	echo "<br>";
	echo $_SERVER['HTTP_USER_AGENT'];
?>