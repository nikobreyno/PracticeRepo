<?php

include '../Dbhelper.php';

$posts = retrieve_all_post_of_parent_by_child($_GET['parent_id'], $_GET['child_id']);
if(empty($posts)){
	echo 'no posts found!';
}
else {
	echo '{"posts" : '.json_encode($posts).'}';
}

?>