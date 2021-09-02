<?php

$a = [1,2,3,5,6,7,8,9,9,9,9,94,56,6];

echo "The size of array is: ".count($a)."<br>";
echo  "The size of array is: ".sizeof($a)."<br>";

echo "<pre>";
print_r(array_count_values($a));
echo "</pre>";
?>