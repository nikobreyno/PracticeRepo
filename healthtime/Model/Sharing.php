<?php

class Sharing{

	private $sharing_id;
	private $from_family_id;
	private $to_parent_id;
	private $child_id;
	private $privilege;
	
	function get_sharing_id(){
	return $this->sharing_id;
	}
	
	function set_sharing_id($new_sharing_id){
	$this->sharing_id = $new_sharing_id;
	}
	
	function get_from_family_id(){
	return $this->from_family_id;
	}
	
	function set_from_family_id($new_from_family_id){
	$this->from_family_id = $new_from_family_id;
	}
	
	function get_to_parent_id(){
	return $this->to_parent_id;
	}
	
	function set_to_parent_id($new_to_parent_id){
	$this->to_parent_id = $new_to_parent_id;
	}
	
	function get_child_id(){
	return $this->child_id;
	}
	
	function set_child_id($new_child_id){
	$this->child_id = $new_child_id;
	}
	
	function get_privilege(){
	return $this->privilege;
	}
	
	function set_privilege($new_privilege){
	$this->privilege = $new_privilege;
	}
	
}
?>