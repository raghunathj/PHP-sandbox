<?php
//Example to use Reference

class Person{
 function say_hello(){
	 echo "Hello World ".get_class($this);
 }
 
 function hello(){
	$this->say_hello(); 
 }
}

//To use instance of Person
$person = new Person();
$person->say_hello();
$person->hello();
?>