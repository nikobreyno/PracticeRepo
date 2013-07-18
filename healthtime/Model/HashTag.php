<?php

class HashTag{

	private $hash_tag_id;
	private $hash_tag_name;
	private $hash_tag_category;
	
	function get_hash_tag_id(){
	return $this->hash_tag_id;
	}
	
	function set_hash_tag_id($new_hash_tag_id){
	$this->hash_tag_id = $new_hash_tag_id;
	}
	
	function get_hash_tag_name(){
	return $this->hash_tag_name;
	}
	
	function set_hash_tag_name($new_hash_tag_name){
	$this->hash_tag_name = $new_hash_tag_name;
	}
	
	function get_hash_tag_category(){
	return $this->hash_tag_category;
	}
	
	function set_hash_tag_category($new_hash_tag_category){
	$this->hash_tag_category = $new_hash_tag_category;
	}
	
}
?>