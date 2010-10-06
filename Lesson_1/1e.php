<?php
//Example on Instance variables/Attributes/Properties

class Person{
	//To define variable name inside a class
 var $firstname;
 var $lastname;
 
 var $arm_count = 2;
 var $leg_count = 2;
	
 function say_hello(){
	 echo "Hello World ".get_class($this);
 }
 
 function hello(){
	$this->say_hello(); 
 }
 
 function full_name(){
	return $this->firstname." ".$this->lastname; 
 }
}

//To use instance of Person
$person = new Person();

//There is no $ sign for arm_count = Dynamic variable
echo $person->arm_count."<br/>";

//To set value
$person->firstname="Raghu";
$person->lastname = "J";

//New Instance
$person2 = new Person;
$person2->firstname="Soundar";

echo $person->firstname."<br/>";
echo $person2->firstname."<br/>";

//To return function value
echo $person->full_name()."<br/>";
?>