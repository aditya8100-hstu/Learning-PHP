<?php

$a = [1,2,43,5,6,"7",8];

echo "Is the selected thing is in the array list: ". in_array(7, $a , false)."<br>";

echo "The key value is : ". array_search(7, $a,false);

?>