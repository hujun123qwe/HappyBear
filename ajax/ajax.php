<?php

//1.½Ó¿Ú
//2.ajaxÇëÇó


require_once('./DB.php');

$connect = DB::getInstance()->connect();

$sql = "select * from news as a join hit as b on a.news_id = b.news_id order by number desc limit 3";

$result = mysql_query($sql, $connect);

$res = array();
while($row = mysql_fetch_array($result)){
	$res[] = $row;
}

return show($res);

function show($code=0, $message='error', $data=array()){
	$result = array(
		'code'=>$code,
		'message'=>$message;
		'data'=>$data;
	);
}



?>