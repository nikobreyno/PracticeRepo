<?php

class Sharing{

	private $sharing_id;
	private $from_parent_id;
	private $to_parent_id;
	private $to_child_id;
	private $privilege;
	
	function get_sharing_id(){
	return $this->sharing_id;
	}
	
	function set_sharing_id($new_sharing_id){
	$this->sharing_id = $new_sharing_id;
	}
	
	function get_from_parent_id(){
	return $this->from_parent_id;
	}
	
	function set_from_parent_id($new_from_parent_id){
	$this->from_parent_id = $new_from_parent_id;
	}
	
	function get_to_parent_id(){
	return $this->to_parent_id;
	}
	
	function set_to_parent_id($new_to_parent_id){
	$this->to_parent_id = $new_to_parent_id;
	}
	
	function get_to_child_id(){
	return $this->to_child_id;
	}
	
	function set_to_child_id($new_to_child_id){
	$this->to_child_id = $new_to_child_id;
	}
	
	function get_privilege(){
	return $this->privilege;
	}
	
	function set_privilege($new_privilege){
	$this->privilege = $new_privilege;
	}
	
}
?>