<?php 
session_start();
	if(isset($_GET['menu'])){
		$_SESSION['menu'] = $_GET['menu'];
	}else{
		$_SESSION['menu'] = 'home';
	}

 

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
      Menu
       <ul>
       	  <li><a href="s.php?menu=home">Home</a></li>
       	  <li><a href="s.php?menu=product">product</a></li>
       	  <li><a href="s.php?menu=aboutus">aboutus</a></li>
       </ul>





       <?php
       if($_SESSION['menu'] == 'home'){
       		 $s = 0 ; 
                  if ($_SERVER["REQUEST_METHOD"] == "POST") {
                         echo $s;
                         $s++;
                  }
                  echo '<form method="post" action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'">  
                         <button type="submit" name="submit" value="Submit"><h1>+</h1></button>
                        </form> ';
       }
       if($_SESSION['menu'] == 'product'){
       		  echo '<h1>Hello productpage</h1>';
       }
       if($_SESSION['menu'] == 'aboutus'){
       		  echo '<h1>Hello aboutuspage</h1>';
       }
      
     
     

        ?>
 </body>
 </html>
