<?php
	
/*
*	@copyright	hujun123qwe
*	@time		2015-08-12 09:10:24
*	@lastmodify	hujun123qwe
*/	
	
	require_once('preg.class.php');
	
	
	//通过正则表达式得到的地址是
	//C:/some/manual
	//把反斜杠替换为正斜杠
	define("HTTP_WWW_ROOT", __DIR__);
	$quote_slashes = new Preg_Template("/\\\\/", HTTP_WWW_ROOT, 1, '/');
	$http_www_root = $quote_slashes->start_preg();
	
	
	$sql = isset($_POST['sql_content']) ? $_POST['sql_content'] : "";
	$time_content = isset($_POST['time_content']) ? $_POST['time_content'] : "";
	$main_content = isset($_POST['main_content']) ? $_POST['main_content'] : "";
	//$image_filedname = isset($_POST['pic']) ? $_POST['pic'] : "";
	$image_filedname = "pic";
	
	
	if(file_exists('sql.class.php')){
		require 'sql.class.php';
	}else{
		$user_error_message = "Can not find sql.class.php";
		header("Location:show_error.php?error_message={$user_error_message}");
		exit();
	}
	$res="";
	$db = new SQL_Engine("some");
	if(empty($sql)){
		echo "something must be wrong!";
	}else{
		$res = $db->get_one($sql);
		echo '<script type="text/javascript">function delete_info(id){
			if(confirm("确定删除")){
				window.location="delete_info.php?id="+id;
			}
		}</script>';
		//var_dump($res);
		if(is_array($res)){
			echo "<ul>";
			foreach($res as $key){
				$clear_item_time = new Preg_Template("/^\d\d/",$key,0);
				if($clear_item_time->start_preg()){
				echo "<li>",$key,"<a href='javascript:delete_info(1);'><img class='delete_info' src='upload_pic/delete.png'></a></li>";
				}else{
					echo "<li>",$key,"</li>";
				}
			}
			echo "</ul>";
		}
	}
	
	
	/*
	*使用{$time_content},{$main_content}
	*会出错？？
	*'$time_content'
	*
	*使用'{$time_content}'
	*/
	if(empty($time_content) || empty($main_content)){
		echo "empty time and content";
	}else{
		//居然是少了一个正斜杠
		$upload_dir = $http_www_root."/upload_pic/";
		//var_dump($_FILES[$image_filedname]);
		//exit();
		//如何处理上传的图片
		//($_FILES[$image_filedname]['error']==0) or die("服务器不能上传你的图片");
		//@is_uploaded_file($_FILES[$image_filedname]['tmp_name']) or die("这不是有效的文件");
		//@getimagesize($_FILES[$image_filedname]['tmp_name']) or die("不是图片文件");
		
		//$now = time();
		//while(file_exists($upload_filename=$upload_dir.$now.'-'.$_FILES[$image_filedname]['name'])){
		//	$now++;
		//}
		//@move_uploaded_file($_FILES[$image_filedname]['tmp_name'], $upload_filename) or die("服务器保存文件失败");
		
		$sql_li="INSERT INTO manual (create_time,item) values('$time_content','$main_content')";
		$flag = $db->insert_into($sql_li);
		
		
		//把图像插到images表中，两个方法只能用一个
		//couse：move_uploaded_file
		$image = $_FILES[$image_filedname];
		$image_filedname = $image['name'];
		$image_info = getimagesize($image['tmp_name']);
		$image_mime_type = $image_info['mime'];
		$image_size = $image['size'];
		$image_data = file_get_contents($image['tmp_name']);
		
		
		$insert_img_sql = sprintf("INSERT INTO images ".
								"(filename, mime_type, file_size, image_data) ".
								"VALUES('%s', '%s', '%d', '%s');",
								mysql_real_escape_string($image_filedname),
								mysql_real_escape_string($image_mime_type),
								mysql_real_escape_string($image_size),
								mysql_real_escape_string($image_data));
		$flag2=$db->insert_into($insert_img_sql);
		
		if($flag && $flag2){
			echo "OK!";
		}else{
			echo "ERROR!";
		}
	}
	
	
	

?>