<?php

//通过正则表达式解析伪静态URL
//如http://some.com/newslist.php?b=2&c=1
//http://some.com/newslist.php/2/1.html
//brand = 2, categoty = 1

$regex = "/^\/(\d+)\/(\d+).html/";

if(preg_match($regex, $_SEVER['path_info'], $arr)){
	$brand = $arr[1];
	$categoty = $arr[2];
}


?>