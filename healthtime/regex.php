<?php

function regex($string){
	$chars = preg_split("/ /", $string);

	$matches = preg_grep("/^#[A-Za-z0-9][A-Za-z0-9_]*$/", $chars);

	foreach($matches as $value){
		$value = $matches;
	}
	return $value;
}

$value = regex("bading si #nikoBREYNO@!&!&&!&!#bakla");

print_r($value);

?>