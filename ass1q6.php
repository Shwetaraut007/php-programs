<?php 
$total_marks = 0;  
$sub = 0;  
$student1 = array( "ds" => 70, "dm" => 90,  "php" => 88,  "SE" => 60,  "bd" => 45);  
  foreach ($student1 as $key => $value) 
  {  
	$total_marks=$total_marks + $value;  
	$total_marks += $value;  
	$sub++;  
  }  
 	echo("<BR>The total marks of student is ".$total_marks);  
	echo("<BR>Percentage is = ". $total_marks / $sub);  
?>