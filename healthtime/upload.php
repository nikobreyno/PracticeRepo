<?php

function is_valid($file)
{
	$type = array("image/jpg", "image/jpeg", "image/bmp", "image/gif");
	
	if(in_array($file['type'], $type))
		return 1;
	return 0;
}

$TARGET_PATH = "images/";

$userid = $_POST["userid"];
$image = $_FILES['image'];
$new_filename = $userid . $image['name'];

if(!is_valid($image))
{
	echo "invalid file";
}
else
{
	move_uploaded_file($image['tmp_name'],
    $TARGET_PATH . $new_filename);
    echo 'Stored in: ' . $TARGET_PATH . $new_filename;
	
	include 'Dbhelper.php';
	add_image($userid, $new_filename);
}

?>