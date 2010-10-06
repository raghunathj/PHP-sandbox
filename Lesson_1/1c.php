<?php
//Example to use class

class Person{
 function say_hello(){
	 echo "Hello World";
 }
}

//To use instance of Person
$person = new Person();

//New Instance
$person2 = new Person();

//To echo a class name
echo get_class($person)."<br/>";

//Using the method for a class
$person->say_hello();

?>