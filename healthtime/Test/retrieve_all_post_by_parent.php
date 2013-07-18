<?php

include '../Dbhelper.php';

$posts = retrieve_all_post_by_parent($_GET['id']);
if(empty($posts)){
	echo 'no posts found!';
}
else {
	echo '{"posts" : '.json_encode($posts).'}';
}

?>