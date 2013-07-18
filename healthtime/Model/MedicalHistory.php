<?php

class MedicalHistory{

	private $parent_id;
	private $medical_history_id;
	private $anemia;
	private $asthma;
	private $bleeding_disorder;
	private $diabetes;
	private $epilepsy;
	private $heart_disorder;
	private $high_blood;
	private $high_cholesterol;
	private $liver_disorder;
	private $kidney_disorder;
	private $nasal_allergy;
	private $tuberculosis;
	
	function get_parent_id(){
	return $this->parent_id;
	}
	
	function set_parent_id($new_parent_id){
	$this->parent_id = $new_parent_id;
	}
	
	function get_medical_history_id(){
	return $this->medical_history_id;
	}
	
	function set_medical_history_id($new_medical_history_id){
	$this->medical_history_id = $new_medical_history_id;
	}
	
	function get_anemia(){
	return $this->anemia;
	}
	
	function set_anemia($new_anemia){
	$this->anemia = $new_anemia;
	}
	
	function get_asthma(){
	return $this->asthma;
	}
	
	function set_asthma($new_asthma){
	$this->asthma = $new_asthma;
	}
	
	function get_bleeding_disorder(){
	return $this->bleeding_disorder;
	}
	
	function set_bleeding_disorder($new_bleeding_disorder){
	$this->bleeding_disorder = $new_bleeding_disorder;
	}
	
	function get_diabetes(){
	return $this->diabetes;
	}
	
	function set_diabetes($new_diabetes){
	$this->diabetes = $new_diabetes;
	}
	
	function get_epilepsy(){
	return $this->epilepsy;
	}
	
	function set_epilepsy($new_epilepsy){
	$this->epilepsy = $new_epilepsy;
	}

	function get_heart_disorder(){
	return $this->heart_disorder;
	}
	
	function set_heart_disorder($new_heart_disorder){
	$this->heart_disorder = $new_heart_disorder;
	}
	
	function get_high_blood(){
	return $this->high_blood;
	}
	
	function set_high_blood($new_highBlood){
	$this->high_blood = $new_highBlood;
	}
	
	function get_high_cholesterol(){
	return $this->high_cholesterol;
	}
	
	function set_high_cholesterol($new_high_cholesterol){
	$this->high_cholesterol = $new_high_cholesterol;
	}
	
	function get_liver_disorder(){
	return $this->liver_disorder;
	}
	
	function set_liver_disorder($new_liver_disorder){
	$this->liver_disorder = $new_liver_disorder;
	}
	
	function get_kidney_disorder(){
	return $this->kidney_disorder;
	}
	
	function set_kidney_disorder($new_kidney_disorder){
	$this->kidney_disorder = $new_kidney_disorder;
	}
	
	function get_nasal_allergy(){
	return $this->nasal_allergy;
	}
	
	function set_nasal_allergy($new_nasal_allergy){
	$this->nasal_allergy = $new_nasal_allergy;
	}

	function get_tuberculosis(){
	return $this->tuberculosis;
	}
	
	function set_tuberculosis($new_tuberculosis){
	$this->tuberculosis = $new_tuberculosis;
	}
	
}
?>