<?php
//Example to create methods in class

class Person{
 function say_hello(){
	 echo "Hello World";
 }
}

//See all methods defined in a class

$methods = get_class_methods('Person');
foreach($methods as $method){
	echo $method."<br/>";
}

//To check methods exist

if(method_exists('Person','say_hello')){
	echo "Exists";	
} else {
	echo "not found";
}
	

?>