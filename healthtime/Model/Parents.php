<?php

class Parents{
	private $parent_id;
	private $first_name;
	private $last_name;
	private $gender;
	private $blood_type;
	private $email;
	private $password;
	private $parent_image_id;
	private $family_id;
	private $account_status;
	
	function get_parent_id(){
	return $this->parent_id;
	}
	
	function set_parent_id($new_parent_id){
	$this->parent_id = $new_parent_id;
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
	
	function get_blood_type(){
	return $this->blood_type;
	}
	
	function set_blood_type($new_blood_type){
	$this->blood_type = $new_blood_type;
	}

	
	function get_email(){
	return $this->email;
	}
	
	function set_email($new_email){
	$this->email = $new_email;
	}
	
	function get_password(){
	return $this->password;
	}
	
	function set_password($new_password){
	$this->password = $new_password;
	}
	
	function get_parent_image_id(){
	return $this->parent_image_id;
	}
	
	function set_parent_image_id($new_parent_image_id){
	$this->parent_image_id = $new_parent_image_id;
	}

	function get_family_id(){
	return $this->family_id;
	}
	
	function set_family_id($new_family_id){
	$this->family_id = $new_family_id;
	}
	
	function get_account_status(){
	return $this->account_status;
	}
	
	function set_account_status($new_account_status){
	$this->account_status = $new_account_status;
	}
	
}
?>