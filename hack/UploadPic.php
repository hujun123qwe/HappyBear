<?php

if(isset['user_pic']){
	echo "OK";
}
else{
	echo "error";
}

$image_filename = "uesr_pic";

//确保上传图像无误
($_FILES['$image_filename']['error']==0)
or handle_error("服务器不能上传您的图片",
	$php_errors[$_FILES['$image_filename']['error']]);
	
//检测有效图片
@is_uploaded_file($FILES[$image_filename]['tmp_name'])
or handle_error("您在做一些下流的事情，不知羞耻！"
	"Uploaded request: file named".
	"'{$_FILES[$image_filename]['tmp_name']}'");

//真的是图片
@getimagesize($_FILES[$image_filename]['tmp_name'])
or handle_error("you selected a file for your picture".
	"that isn't an image.",
	"{$_FILES[$image_filename]['tmp_name']}".
	"不是有效文件");

//生成唯一文件名
$now=time();
while(file_exists($upload_filename=$upload_dir.$now.'-'.
	$_FILES[$image_filename]['name'])){
		$now++;
	}
	

//移文件
@move_uploaded_file($_FILES[$image_filename]['tmp_name'],$upload_filename)
or handle_error("we had a problem saving your image to".
	"its permanment location.",
	"permissions or related error moving".
	"file to {$upload_filename}");

header("Location:UploadPic.html");
exit();
	
?>