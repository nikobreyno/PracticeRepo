<?php
include '../Dbhelper.php';
include '../Model/Post.php';

$onepost = new Post();

$onepost->set_to_parent_id($_POST['to_parent_id']);
$onepost->set_from_parent_id($_POST['from_parent_id']);
$onepost->set_child_id($_POST['child_id']);
$onepost->set_post_content($_POST['post_content']);
$onepost->set_file_id($_POST['file_id']);

$tags = retrieve_tags($onepost->get_post_content());
$category = 0;
foreach ($tags as $onetag) {
	preg_match("/#/",$onetag,$tagmeaning);
	if(!empty($tagmeaning[0])){
		echo $onetag;
		$temp = retrieve_category_from_tag($onetag);
		if(isset($temp)){
			$category = $temp;
		}
	}
	else{ echo $category;
	}
}

$onepost->set_post_category_id($category);
if(add_post($onepost))
	echo 'true';
	else echo 'false';

?>