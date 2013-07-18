<?php

class Gallery{

	private $gallery_id;
	private $filename;
	
	function get_gallery_id(){
	return $this->gallery_id;
	}
	
	function set_gallery_id($new_gallery_id){
	$this->gallery_id = $new_gallery_id;
	}
	
	function get_filename(){
	return $this->filename;
	}
	
	function set_filename($new_filename){
	$this->filename = $new_filename;
	}
	
}
?>