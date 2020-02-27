<?php

$myArray = ['HTML', 'CSS','PHP'];

echo $myArray[1];

$myArray2 = array('CSS', 'JavaScrpt', 'Python');
echo '<br>' . $myArray2[2];
echo '<br>';
print_r($myArray);
echo '<br>';
var_dump($myArray);

//adding elements to array
$myArray[]=20;
//other way to add element to array
array_push($myArray, 'JAVA', 30);

?>