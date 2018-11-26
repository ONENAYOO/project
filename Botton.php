<?php
$s; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 echo $s;
	 $s++;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 <button type="submit" name="submit" value="Submit"><h1>+</h1></button>
</form> 
</body>
</html>