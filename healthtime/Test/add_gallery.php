<?php
include '../Dbhelper.php';
include '../Model/Gallery.php';

$onegallery = new Gallery();

$onegallery->set_filename($_POST['filename']);

if(add_gallery($onegallery))
	echo 'true';
	else echo 'false';

?>