<?php

class Child{

	private $child_id;
	private $first_name;
	private $last_name;
	private $gender;
	private $birthdate;
	private $blood_type;
	private $family_id;
	private $child_image_id;
	
	function get_child_id(){
	return $this->child_id;
	}
	
	function set_child_id($new_child_id){
	$this->child_id = $new_child_id;
	}
	
	function get_first_name(){
	return $this->first_name;
	}
	
	function set_first_name($new_first_name){
	$this->first_name = $new_first_name;
	}
	
	function get_last_name(){
	return $this->last_name;
	}
	
	function set_last_name($new_last_name){
	$this->last_name = $new_last_name;
	}
	
	function get_gender(){
	return $this->gender;
	}
	
	function set_gender($new_gender){
	$this->gender = $new_gender;
	}
	
	function get_birthdate(){
	return $this->birthdate;
	}
	
	function set_birthdate($new_birthdate){
	$this->birthdate = $new_birthdate;
	}
	
	function get_blood_type(){
	return $this->blood_type;
	}
	
	function set_blood_type($new_blood_type){
	$this->blood_type = $new_blood_type;
	}

	function get_family_id(){
	return $this->family_id;
	}
	
	function set_family_id($new_family_id){
	$this->family_id = $new_family_id;
	}
	
	function get_child_image_id(){
	return $this->child_image_id;
	}
	
	function set_child_image_id($new_child_image_id){
	$this->child_image_id = $new_child_image_id;
	}
	
}
?>