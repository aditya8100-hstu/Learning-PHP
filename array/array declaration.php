<?php

$a = array(1,2,3,4,5,6);

for($i=0 ; $i<=5 ; $i++){
	//echo "fisrt: " .$a[$i]."<br>" ;
	echo "<li>first $a[$i] <br></li>" ;
}

echo "<ul>";
$b = [1,2,3,4,5,6];
for($i=0;$i<6;$i++){
	echo "<li>second: " .$a[$i]."<br> </li>";
}
echo "</ul>";
?>