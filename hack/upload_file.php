<?php

$dir_name=__DIR__;
echo $_FILES;
$file_name = $dir_name.$_FILES['upload_file']['name'];

if(move_uploaded_file($_FILES['upload_file']['tmp_name'],
	$file_name)){
		echo "OK";
	}
	else{
		echo "ERORR";
	}

?>