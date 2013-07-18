<?php
include '../Dbhelper.php';
include '../Model/Comment.php';

$onecomment = new Comment();

$onecomment->set_parent_id($_POST['parent_id']);
$onecomment->set_post_id($_POST['post_id']);
$onecomment->set_comment_date($_POST['comment_date']);
$onecomment->set_comment_content($_POST['comment_content']);

if(add_comment($onecomment))
	echo 'true';
	else echo 'false';

?>