<?php
include '../Dbhelper.php';
include '../Model/Post.php';

$onepost = new Post();

$onepost->set_to_parent_id($_POST['to_parent_id']);
$onepost->set_from_parent_id($_POST['from_parent_id']);
$onepost->set_child_id($_POST['child_id']);
$onepost->set_post_content($_POST['post_content']);
$onepost->set_post_date($_POST['post_date']);
$onepost->set_post_category_id($_POST['post_category_id']);
$onepost->set_file_id($_POST['file_id']);

if(delete_post($onepost))
	echo 'true';
	else echo 'false';

?>