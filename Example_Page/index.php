<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>ThaiCreate.Com</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
</head>

<body>
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center">

	<!-- Header -->
	<?php include("header.php"); ?>

	</div></td>
  </tr>
  <tr>
    <td width="24%"><div align="center">

	<!-- Menu -->
	<?php include("menu.php"); ?>

	</div></td>
    <td width="76%">

	<!-- Container -->
	<?php 
	switch ($_GET["page"]) {
	case "home":
		echo "Home";
		include("page_home.php");
		break;
	case "service":
		echo "Home -> Service";
		include("page_service.php");
		break;
	case "product":
		echo "Home -> Product";
		include("page_product.php");
		break;
	case "aboutus":
		echo "Home -> About Us";
		include("page_aboutus.php");
		break;
	case "contactus":
		echo "Home -> Contact Us";
		include("page_contactus.php");
		break;
	default:
		echo "Home";
		include("page_home.php");
	}
	?>

	</td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">

	<!-- Footer -->
	<?php include("footer.php"); ?>

	</div></td>
  </tr>
</table>
</body>
</html>