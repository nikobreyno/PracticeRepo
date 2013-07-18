<?php

class Post{
	private $post_id;
	private $to_parent_id;
	private $from_parent_id;
	private $child_id;
	private $post_content;
	private $post_date;
	private $post_category_id;
	private $file_id;
	
	function get_post_id(){
	return $this->post_id;
	}
	
	function set_post_id($new_post_id){
	$this->post_id = $new_post_id;
	}
	
	function get_to_parent_id(){
	return $this->to_parent_id;
	}
	
	function set_to_parent_id($new_to_parent_id){
	$this->to_parent_id = $new_to_parent_id;
	}
	
	function get_from_parent_id(){
	return $this->from_parent_id;
	}
	
	function set_from_parent_id($new_from_parent_id){
	$this->from_parent_id = $new_from_parent_id;
	}
	
	function get_child_id(){
	return $this->child_id;
	}
	
	function set_child_id($new_child_id){
	$this->child_id = $new_child_id;
	}
	
	function get_post_content(){
	return $this->post_content;
	}
	
	function set_post_content($new_post_content){
	$this->post_content = $new_post_content;
	}
	
	function get_post_date(){
	return $this->post_date;
	}
	
	function set_post_date($new_post_date){
	$this->post_date = $new_post_date;
	}
	
	function get_post_category_id(){
	return $this->post_category_id;
	}
	
	function set_post_category_id($new_post_category_id){
	$this->post_category_id = $new_post_category_id;
	}

	function get_file_id(){
	return $this->file_id;
	}
	
	function set_file_id($new_file_id){
	$this->file_id = $new_file_id;
	}
	
}
?>