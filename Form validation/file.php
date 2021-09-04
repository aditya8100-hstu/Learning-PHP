<?php

if (isset($_FILES["image"])) {
	
	echo "<pre>";
	print_r($_FILES);
	echo "</pre>" ;

	$name = $_FILES["image"]["name"];
$type = $_FILES["image"]["type"];
$tmp_name = $_FILES["image"]["tmp_name"];
$size = $_FILES["image"]["size"];

if(move_uploaded_file($tmp_name, "R:\baba\MA".$name)){
	echo "Uplaoded Successfully";
} else {
	echo "Not Uploaded";
}
  }

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="" method="post" enctype="multipart/form-data">
		
		<input type="file" name="image">
		<input type="submit" name="save">

	</form>

</body>
</html>