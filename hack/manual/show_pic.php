<?php

	require_once('sql.class.php');
	
	$image_id = isset($_POST['image_pic']) ? $_POST['image_pic'] : "";
	$db = new SQL_Engine("some");
	$select_query = sprintf("SELECT * FROM images WHERE id = %d", $image_id);
	$result = $db->get_pic($select_query);
	
	$image = $result;
	header('Content-type: '.$image['mime_type']);
	header('Content-length: '.$image['file_size']);

	echo $image['image_data'];
?>