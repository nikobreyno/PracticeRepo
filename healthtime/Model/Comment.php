<?php

class Comment{

	private $comment_id;
	private $post_id;
	private $parent_id;
	private $comment_date;
	private $comment_content;
	
	function get_comment_id(){
	return $this->comment_id;
	}
	
	function set_comment_id($new_comment_id){
	$this->comment_id = $new_comment_id;
	}
	
	function get_parent_id(){
	return $this->parent_id;
	}
	
	function set_parent_id($new_parent_id){
	$this->parent_id = $new_parent_id;
	}
	
	function get_post_id(){
	return $this->post_id;
	}
	
	function set_post_id($new_post_id){
	$this->post_id = $new_post_id;
	}
	
	function get_comment_date(){
	return $this->comment_date;
	}
	
	function set_comment_date($new_comment_date){
	$this->comment_date = $new_comment_date;
	}
	
	function get_comment_content(){
	return $this->comment_content;
	}
	
	function set_comment_content($new_comment_content){
	$this->comment_content = $new_comment_content;
	}

}
?>