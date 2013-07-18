<?php
include 'Dbhelper.php';
include 'Model/PostImage.php';

$onepostimage = new PostImage();

$onepostimage->set_post_image_id($_POST['post_image_id']);
$onepostimage->set_filename($_POST['filename']);

if(add_post_image($onepostimage)
	echo 'true';
	else echo 'false';

?>