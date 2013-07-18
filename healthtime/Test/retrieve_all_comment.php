<?php

include '../Dbhelper.php';

$comment = retrieve_all_comment_by_post($_GET['id']);
if(empty($comment)){
	echo 'no comment found!';
}
else {
	echo '{"comment" : '.json_encode($comment).'}';
}

?>