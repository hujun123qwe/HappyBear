<?php
	$grades = $_REQUEST['grades'];
	echo $grades;
	echo "<br>";
	//���
	$grades = explode(" ", $grades);
	$sum = 0;
	foreach($grades as $key=> $v){
		echo $key."=".$v;
		echo "<br>";
		//����ת��
		$sum += $v;
	}
	echo "<br>";
	echo $sum;
	echo "<br>";
	//������λС��
	echo round($sum/count($grades), 2);
	echo "<br>";
	echo $_SERVER['HTTP_USER_AGENT'];
?>