<?php

class Doctor{

	private $doctor_id;
	private $parent_id;
	private $specialty;
	private $hospital;
	private $hospital_address;
	private $consultation;
	private $contact1;
	private $contact2;
	
	function get_parent_id(){
	return $this->parent_id;
	}
	
	function set_parent_id($new_parent_id){
	$this->parent_id = $new_parent_id;
	}
	
	function get_doctor_id(){
	return $this->doctor_id;
	}
	
	function set_doctor_id($new_doctor_id){
	$this->doctor_id = $new_doctor_id;
	}
	
	function get_specialty(){
	return $this->specialty;
	}
	
	function set_specialty($new_specialty){
	$this->specialty = $new_specialty;
	}
	
	function get_hospital(){
	return $this->hospital;
	}
	
	function set_hospital($new_hospital){
	$this->hospital = $new_hospital;
	}
	
	function get_hospital_address(){
	return $this->hospital_address;
	}
	
	function set_hospital_address($new_hospital_address){
	$this->hospital_address = $new_hospital_address;
	}
	
	function get_consultation(){
	return $this->consultation;
	}
	
	function set_consultation($new_consultation){
	$this->consultation = $new_consultation;
	}
	
	function get_contact1(){
	return $this->contact1;
	}
	
	function set_contact1($new_contact1){
	$this->contact1 = $new_contact1;
	}
	
	function get_contact2(){
	return $this->contact2;
	}
	
	function set_contact2($new_contact2){
	$this->contact2 = $new_contact2;
	}
	
}
?>