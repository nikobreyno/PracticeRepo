<?php

class CategoryReference{
	private $category_id;
	private $category_name;
	
	function get_category_id(){
	return $this->category_id;
	}
	
	function set_category_id($new_category_id){
	$this->category_id = $new_category_id;
	}
		
	function get_category_name(){
	return $this->category_name;
	}
	
	function set_category_name($new_category_name){
	$this->category_name = $new_category_name;
	}
	
}
?>