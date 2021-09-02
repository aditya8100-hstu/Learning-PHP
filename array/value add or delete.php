<?php

$a = [1,2,3,5,6,7,8];

//add value at the LAST
array_push($a, 10,11);
echo "<pre>";
print_r($a);
echo "</pre>";

//delete value from the LAST
array_pop($a);
echo "<pre>";
print_r($a);
echo "</pre>";


////delete value from the FIRST
array_shift($a);
echo "<pre>";
print_r($a);
echo "</pre>";

//add value at the FIRST
array_unshift($a, 10,11);
echo "<pre>";
 print_r($a);
echo "</pre>";



?>