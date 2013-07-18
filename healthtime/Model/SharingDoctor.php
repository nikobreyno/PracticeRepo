<?php

class SharingDoctor{

	private $sharing_doctor_id;
	private $doctor_id;
	private $parent_id;
	private $child_id;
	
	function get_sharing_doctor_id(){
	return $this->sharing_doctor_id;
	}
	
	function set_sharing_doctor_id($new_sharing_doctor_id){
	$this->sharing_doctor_id = $new_sharing_doctor_id;
	}
	
	function get_doctor_id(){
	return $this->doctor_id;
	}
	
	function set_doctor_id($new_doctor_id){
	$this->doctor_id = $new_doctor_id;
	}
	
	function get_parent_id(){
	return $this->parent_id;
	}
	
	function set_parent_id($new_parent_id){
	$this->parent_id = $new_parent_id;
	}
	
	function get_child_id(){
	return $this->child_id;
	}
	
	function set_child_id($new_child_id){
	$this->child_id = $new_child_id;
	}
	
}
?>