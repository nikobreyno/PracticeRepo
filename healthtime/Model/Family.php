<?php

class Family{

	private $family_id;
	private $father_id;
	private $mother_id;
	
	function get_family_id(){
	return $this->family_id;
	}
	
	function set_family_id($new_family_id){
	$this->family_id = $new_family_id;
	}
	
	function get_father_id(){
	return $this->father_id;
	}
	
	function set_father_id($new_father_id){
	$this->father_id = $new_father_id;
	}
	
	function get_mother_id(){
	return $this->mother_id;
	}
	
	function set_mother_id($new_mother_id){
	$this->mother_id = $new_mother_id;
	}
	
}
?>