<?php
//Example to Define a Class

class Person{
		
}

//To see declared classes
//$classes = get_declared_classes();
//foreach($classes as $class){
//	echo $class."<br/>";	
//}

//To check specific class is declared
if(class_exists("Person")){
	echo "Class exists";	
}
else {
	echo "Class not defined.";	
}
?>