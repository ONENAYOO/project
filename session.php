<?php
session_start();
$_SESSION["strName"] = "Mr.Weerachai Nukitram";
$_SESSION["strSiteName"] = "ThaiCreate.Com";
session_write_close();
?>
<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
</head>
<body>
Session Created.<br><br>
<a href="session.php">Check Session</a>
</body>
</html>


<?php
session_start();
?>
<html>
<head>
</head>
<body>
	<br>
session_id(); = <?php echo session_id();?><br>
$strName = <?php echo $_SESSION["strName"];?><br>
$strSiteName = <?php echo $_SESSION["strSiteName"];?><br>
<br>

</body>
</html>