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
       		 echo     '
<!DOCTYPE html>
  <html>
  <head>
  <style> h1 {
    color: white;
    text-align: center;
}
</style>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </head>
  <body> 
    
<h1>Remote1</h1>
<div class="container" style="width:16%" >
  
    <div class="card bg-primary"> 
      
                  <div class="row">
                        <div class="col">
                  <a href=\"Setting?Remote1= 1 "><button > ON </button></a>
                        </div>
                        <div class="col">
            <a href=\"Setting?Remote1= 1 "><button > ON </button></a>
                        </div>
                        <div class="col">
                  <a href=\"Setting?Remote1= 1 "><button style="float: right;"> ON </button></a>
                        </div>
                  </div>

      <br>

        <div class="row">
        <div class="col">
          <a href=\"Setting?Remote1= 1 "><button > ON </button></a>
          <br><br>
          <a href=\"Setting?Remote1= 1 "><button > ON </button></a>
        </div>
        <div class="col">

          <a href=\"Setting?Remote1= 1 "><button > ON </button></a>  
              <br><br>
              <a href=\"Setting?Remote1= 1 "><button > ON </button></a>  

        </div>
        <div class="col">
          <a href=\"Setting?Remote1= 1 "><button style="float: right;"> ON </button></a>
<br><br>
              <a href=\"Setting?Remote1= 1 "><button > ON </button></a>
        </div>
      </div>
       <br>

       <div class="row">
        <div class="col">
          <a href=\"Setting?Remote1= 1 "><button > ON </button></a>
        </div>
        <div class="col">
          <a href=\"Setting?Remote1= 1 "><button > ON </button></a>
        </div>
        <div class="col">
          <a href=\"Setting?Remote1= 1 "><button style="float: right;"> ON </button></a>
        </div>
            <div class="container" style="margin-top:100px">

      </div>
   
    </div>
  
    </div>  
 ';
       }
       if($_SESSION['menu'] == 'product'){
       		     echo '
<!DOCTYPE html>
  <html>
  <head>
  <style> h1 {
    color: white;
    text-align: center;
}
</style>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </head>
  <body> 
    
<h1>Remote1</h1>
<div class="container" style="width:16%" >
  
    <div class="card bg-primary"> 
      
                  <div class="row">
                        <div class="col">
                  <a href=\"Setting?Remote1= 1 "><button > ON </button></a>
                        </div>
                        <div class="col">
            <a href=\"Setting?Remote1= 1 "><button > ON </button></a>
                        </div>
                        <div class="col">
                  <a href=\"Setting?Remote1= 1 "><button style="float: right;"> ON </button></a>
                        </div>
                  </div>

      <br>

        <div class="row">
        <div class="col">
          <a href=\"Setting?Remote1= 1 "><button > ON </button></a>
          <br><br>
          <a href=\"Setting?Remote1= 1 "><button > ON </button></a>
        </div>
        <div class="col">

          <a href=\"Setting?Remote1= 1 "><button > ON </button></a>  
              <br><br>
              <a href=\"Setting?Remote1= 1 "><button > ON </button></a>  

        </div>
        <div class="col">
          <a href=\"Setting?Remote1= 1 "><button style="float: right;"> ON </button></a>
<br><br>
              <a href=\"Setting?Remote1= 1 "><button > ON </button></a>
        </div>
      </div>
       <br>

       <div class="row">
        <div class="col">
          <a href=\"Setting?Remote1= 1 "><button > ON </button></a>
        </div>
        <div class="col">
          <a href=\"Setting?Remote1= 1 "><button > ON </button></a>
        </div>
        <div class="col">
          <a href=\"Setting?Remote1= 1 "><button style="float: right;"> ON </button></a>
        </div>
            <div class="container" style="margin-top:100px">

      </div>
   
    </div>
  
    </div>  
 ';
       }
       if($_SESSION['menu'] == 'aboutus'){
       		  echo '<h1>Hello aboutuspage</h1>';
       }
      
     
     

        ?>
 </body>
 </html>
