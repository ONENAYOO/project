<?php 
session_start();
include('connectDB.php');
 $con = mysqli_connect($host,$name,$pass,$DBname) or die(mysqli_error());

    if(isset($_GET['menu'])){
        $_SESSION['menu'] = $_GET['menu'];
    }else{
        $_SESSION['menu'] = 'home';
    }
 ?>
<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<body>


</body>
</html>


<nav class="navbar navbar-expand navbar-dark bg-dark">
      <h4 style="color: white"> Control Mode</h4>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              &nbsp&nbsp&nbsp
                <a href="ControlMode.php?menu=RemoteA" class="nav-item active nav-link">TV 1</a>
                 &nbsp&nbsp&nbsp
                <a href="ControlMode.php?menu=RemoteB" class="nav-item active nav-link">TV 2</a>
                 &nbsp&nbsp&nbsp
                <a href="ControlMode.php?menu=RemoteC" class="nav item active nav-link">FAN 1</a>
                 &nbsp&nbsp&nbsp
                <a  href="ControlMode.php?menu=RemoteD" class="nav item active nav-link">FAN 2</a>
 &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp
            <a style="float: right;" href="index.php?" class="nav item active nav-link"><button onclick ="return Remote('Page') ">BACK</button></a>
                    </div>
                </li>
            </ul>

        </div>
    </nav>

<script src="https://cdn.netpie.io/microgear.js"></script>

<script>
  const APPID = "Testwittawat";
  const KEY = "rd0xdfHaxoTOFTn";
  const SECRET = "SyigaZHzxEa16H9EiWEI4VS82";
  const ALIAS = "HTMLChat";
var microgear = Microgear.create({
  gearkey : KEY,
  gearsecret : SECRET,
  gearalias : ALIAS
});

  microgear.on('message',function(topic,msg) {
   /* document.getElementById("data").innerHTML = */"Count="+msg;
    console.log('Topic='+topic +', message'+msg);
  });


  microgear.on('present', function(event) {
    console.log(event);
  });

  microgear.on('absent', function(event) {
    console.log(event);
  }); 


  microgear.resettoken(function(result){
    microgear.connect(APPID);
  });

function Remote(input){
   microgear.chat("ESPChat",input);
 /* microgear.chat("ESPChat", <?php $number ?>);*/
}
</script>




       <?php


       if($_SESSION['menu'] == 'RemoteA'){

        if($_SERVER["REQUEST_METHOD"] == "POST"){

      
         
$name = $_REQUEST["button1"];
//echo $name;
$sendtoboard = "SELECT setup.Msg FROM setup INNER JOIN remote ON setup.ID = remote.ID WHERE remote.ID_Botton = '$name'";
//echo $sendtoboard;
$sendDATA= mysqli_query($con,$sendtoboard);
$pie;
while($row = mysqli_fetch_array($sendDATA,MYSQLI_BOTH)){
   
  echo $row['Msg'];
 $pie  =$row['Msg'];

} 
echo "<script>  microgear.chat('ESPChat','$pie' ); </script>  ";

        }
             echo '<!DOCTYPE html>
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
    
<h1>TV 1</h1>
<div class="container">
  <center>

    <div class="card bg-dark  " style="width:200px; height:600px;"> 
    <form method="post" action="ControlMode.php?menu=RemoteA">
      <div class="row">
        <div class="col col-md-6">
         <button  value="101" name="button1"   style="float: left;" ><img src="ON.png" style="width: 30px;height: 25px "></button></a>
        </div>
        
        <div class="col col-md-6" >
         <button value="102" name="button1"  style="float: right;"><img src="OffSound.png" style="width: 30px;height: 25px "></button></a>

        </div>
      </div>
      
        <div class="row" style="margin-top: 15px;" >
        <div class="col col-md-4" >
         <button value="103" name="button1" style="float: left; width: 45px; height: 30px;"> 1</button></a>
        </div>
        <div class="col col-md-4">
          <button value="104" name="button1" style="width: 45px; height: 30px;" >2</button></a>  
        </div>
        <div class="col col-md-4">
          <button value="105" name="button1" style="float: right; width: 45px; height: 30px;">3</button></a>
             
        </div>
      </div>
     <div class="row" style="margin-top: 15px;">
        <div class="col col-md-4">
          <button value="106" name="button1" style="float: left;width: 45px; height: 30px;"> 4</button></a>
        </div>
        <div class="col col-md-4">
          <button value="107" name="button1" style="width: 45px; height: 30px;">5</button></a>  
        </div>
        <div class="col col-md-4">
           <button value="108" name="button1" style="float: right;width: 45px; height: 30px;">6</button></a>
             
        </div>
      </div>

<div class="row" style="margin-top: 15px;">
        <div class="col col-md-4">
         <button value="109" name="button1" style="float: left; width: 45px; height: 30px;"> 7</button></a>
        </div>
        <div class="col col-md-4">
          <button value="110" name="button1" style="width: 45px; height: 30px;">8</button></a>  
        </div>
        <div class="col col-md-4">
           <button value="111" name="button1" style="float: right; width: 45px; height: 30px;">9</button></a>
             
        </div>
      </div>

<div class="row" style="margin-top: 15px;">
        <div class="col col-md-4"> </div>
    <div class="col col-md-4">
           <button value="112" name="button1" style="float: left;"><img src="up.png" style="width: 30px;height: 25px "></button></a>
     </div>
       <div class="col col-md-4">
    </div>
</div>
<div class="row" style="margin-top: 15px;">
        <div class="col col-md-4">
        <button value="113" name="button1" style="float: left;"><img src="left.png" style="width: 30px;height: 25px "></button></a>
      </div>
    <div class="col col-md-4">
         <button value="114" name="button1" style="width: 40px; height: 30px;">OK</button></a>  
      </div>
       <div class="col col-md-4">
         <button value="115" name="button1"style="float: left;"><img src="right.png" style="width: 30px;height: 25px "></button></a>
      </div>
    </div>


<div class="row" style="margin-top: 15px;">
        <div class="col col-md-4">
       
      </div>
    <div class="col col-md-4">
        <button value="116" name="button1" style="float: left;"><img src="down.png" style="width: 30px;height: 25px "></button></a>
      </div>
       <div class="col col-md-4">
      </div>
    </div>

<div class="row" style="margin-top: 15px;">
        <div class="col col-md-6">
        <button value="117" name="button1" style="width: 70px; height: 35px;">MENU</button></a> 
      </div>
    
       <div class="col col-md-6">
        <button value="118" name="button1"style="width: 70px; height: 35px;">GUIDE</button></a> 
      </div>
    </div>
<div class="row" style="margin-top: 15px;">
        <div class="col col-md-6">
       <button value="119" name="button1" style="width: 70px; height: 35px;">BACK</button></a> 
      </div>
    
       <div class="col col-md-6">
        <button value="120" name="button1" style="width: 70px; height: 35px;">EXIT</button></a> 
      </div>
    </div>
<div class="row" style="margin-top: 15px;">
        <div class="col col-md-6">
        <button value="121" name="button1" ><img src="plus.png" style="width: 30px;height: 40px "></button></a>
      </div>
       <div class="col col-md-6">
         <button value="122" name="button1" ><img src="front1.png" style="width: 30px;height: 40px "></button></a>
      </div>
    </div>
    <div class="row" style="margin-top: 15px;">
        <div class="col col-md-6">
        <h2 style= "color:white;">Vol</h2>
      </div>
       <div class="col col-md-6">
        <h2 style= "color:white;">Ch</h2>
      </div>
    </div>

<div class="row" style="margin-top: 15px;">
        <div class="col col-md-6">
       <button value="123" name="button1" ><img src="negative.png" style="width: 30px;height: 40px "></button></a>
      </div>
       <div class="col col-md-6">
          <button value="124" name="button1" ><img src="back.png" style="width: 30px;height: 40px "></button></a>
      </div>
    </div>
</form>
  </center>
    </div>  
';
       }
       if($_SESSION['menu'] == 'RemoteB'){

        if($_SERVER["REQUEST_METHOD"] == "POST"){

      
         
$name = $_REQUEST["button2"];
//echo $name;
$sendtoboard = "SELECT setup.Msg FROM setup INNER JOIN remote ON setup.ID = remote.ID WHERE remote.ID_Botton = '$name'";
//echo $sendtoboard;
$sendDATA= mysqli_query($con,$sendtoboard);
$pie;
while($row = mysqli_fetch_array($sendDATA,MYSQLI_BOTH)){
   
  echo $row['Msg'];
 $pie  =$row['Msg'];

} 
echo "<script>  microgear.chat('ESPChat','$pie' ); </script>  ";

        }

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
    
<h1>TV 2</h1>
<div class="container">
  <center>
    <div class="card bg-dark  " style="width:200px; height:600px;"> 
      <form method="post" action="ControlMode.php?menu=RemoteB">
      <div class="row">
        <div class="col col-md-6">
         <button value="201" name="button2"  style="float: left;" ><img src="ON.png" style="width: 30px;height: 25px "></button></a>
        </div>
        
        <div class="col col-md-6" >
            <button value="202" name="button2"  style="float: right;"><img src="OffSound.png" style="width: 30px;height: 25px "></button></a>

        </div>
      </div>
      
        <div class="row" style="margin-top: 15px;" >
        <div class="col col-md-4" >
          <button value="203" name="button2"  style="float: left; width: 45px; height: 30px;"> 1</button></a>
        </div>
        <div class="col col-md-4">
            <button value="204" name="button2"  style="width: 45px; height: 30px;" >2</button></a>  
        </div>
        <div class="col col-md-4">
           <button value="205" name="button2"  style="float: right; width: 45px; height: 30px;">3</button></a>
             
        </div>
      </div>
     <div class="row" style="margin-top: 15px;">
        <div class="col col-md-4">
            <button value="206" name="button2"  style="float: left;width: 45px; height: 30px;"> 4</button></a>
        </div>
        <div class="col col-md-4">
           <button value="207" name="button2"  style="width: 45px; height: 30px;">5</button></a>  
        </div>
        <div class="col col-md-4">
            <button value="208" name="button2"  style="float: right;width: 45px; height: 30px;">6</button></a>
             
        </div>
      </div>

<div class="row" style="margin-top: 15px;">
        <div class="col col-md-4">
            <button value="209" name="button2"  style="float: left; width: 45px; height: 30px;"> 7</button></a>
        </div>
        <div class="col col-md-4">
          <button value="210" name="button2"  style="width: 45px; height: 30px;">8</button></a>  
        </div>
        <div class="col col-md-4">
           <button value="211" name="button2" style="float: right; width: 45px; height: 30px;">9</button></a>
             
        </div>
      </div>

<div class="row" style="margin-top: 15px;">
        <div class="col col-md-4"> </div>
    <div class="col col-md-4">
            <button value="212" name="button2"  style="float: left;"><img src="up.png" style="width: 30px;height: 25px "></button></a>
     </div>
       <div class="col col-md-4">
    </div>
</div>
<div class="row" style="margin-top: 15px;">
        <div class="col col-md-4">
        <button value="213" name="button2"  style="float: left;"><img src="left.png" style="width: 30px;height: 25px "></button></a>
      </div>
    <div class="col col-md-4">
           <button value="214" name="button2"  style="width: 40px; height: 30px;">OK</button></a>  
      </div>
       <div class="col col-md-4">
          <button value="215" name="button2"  style="float: left;"><img src="right.png" style="width: 30px;height: 25px "></button></a>
      </div>
    </div>


<div class="row" style="margin-top: 15px;">
        <div class="col col-md-4">
       
      </div>
    <div class="col col-md-4">
         <button value="216" name="button2"  style="float: left;"><img src="down.png" style="width: 30px;height: 25px "></button></a>
      </div>
       <div class="col col-md-4">
      </div>
    </div>

<div class="row" style="margin-top: 15px;">
        <div class="col col-md-6">
         <button value="217" name="button2"  style="width: 70px; height: 35px;">MENU</button></a> 
      </div>
    
       <div class="col col-md-6">
        <button value="218" name="button2" style="width: 70px; height: 35px;">GUIDE</button></a> 
      </div>
    </div>
<div class="row" style="margin-top: 15px;">
        <div class="col col-md-6">
          <button value="219" name="button2" style="width: 70px; height: 35px;">BACK</button></a> 
      </div>
    
       <div class="col col-md-6">
           <button value="220" name="button2"  style="width: 70px; height: 35px;">EXIT</button></a> 
      </div>
    </div>
<div class="row" style="margin-top: 15px;">
        <div class="col col-md-6">
        <button value="221" name="button2"  ><img src="plus.png" style="width: 30px;height: 40px "></button></a>
      </div>
       <div class="col col-md-6">
           <button value="222" name="button2"  ><img src="front1.png" style="width: 30px;height: 40px "></button></a>
      </div>
    </div>
    <div class="row" style="margin-top: 15px;">
        <div class="col col-md-6">
        <h2 style= "color:white;">Vol</h2>
      </div>
       <div class="col col-md-6">
        <h2 style= "color:white;">Ch</h2>
      </div>
    </div>

<div class="row" style="margin-top: 15px;">
        <div class="col col-md-6">
         <button value="223" name="button2"  ><img src="negative.png" style="width: 30px;height: 40px "></button></a>
      </div>
       <div class="col col-md-6">
           <button value="224" name="button2"  ><img src="back.png" style="width: 30px;height: 40px "></button></a>
      </div>
    </div>
  </form>
  </center>
    </div>  
'


;
       }
       if($_SESSION['menu'] == 'RemoteC'){

        if($_SERVER["REQUEST_METHOD"] == "POST"){

      
         
$name = $_REQUEST["button3"];
//echo $name;
$sendtoboard = "SELECT setup.Msg FROM setup INNER JOIN remote ON setup.ID = remote.ID WHERE remote.ID_Botton = '$name'";
//echo $sendtoboard;
$sendDATA= mysqli_query($con,$sendtoboard);
$pie;
while($row = mysqli_fetch_array($sendDATA,MYSQLI_BOTH)){
   
  echo $row['Msg'];
 $pie  =$row['Msg'];

} 
echo "<script>  microgear.chat('ESPChat','$pie' ); </script>  ";

        }

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
    
<h1>FAN 1</h1>
<div class="container">
  <center>
    <div class="card bg-dark" style="width:250px; height:340px;"> 
      <br>
      <form method="post" action="ControlMode.php?menu=RemoteC">
      <div class="row">
        <div class="col col-md-6">
        <button value="301" name="button3"   style="width: 45px; height: 60px;"></button></a> 
        <h6 style="color: white";>TIMER </h6>
        </div>
   
        <div class="col  col-md-6" >     <br>
            <button value="302" name="button3"   style="width: 60px; height: 60px;"></button></a> 
        <h6 style="color: white";>OFF</h6>
        </div>
      </div>
      
        <div class="row" style="margin-top: 0px;" >
        <div class="col col-md-6">
        <button value="303" name="button3"   style="width: 45px; height: 60px;"></button></a> 
        <h6 style="color: white";>NATULRAL</h6>
        </div>
        <div class="col col-md-6"><br><br>
         <button value="304" name="button3"   style="width: 60px; height: 60px;" ></button></a>  
             <h6 style="color: white";>ON/SPEED</h6>
        </div>
       
      </div>

      <div class="row" style="margin-top: -20px;" >
        <div class="col col-md-6">
        <button value="305" name="button3"   style="width: 45px; height: 60px;"></button></a> 
        <h6 style="color: white";>SWING</h6>
        </div>
        <div class="col col-md-6"><br><br>
        </div>
       
      </div>



 </form>
  </center>
    </div>  


             ';
       }
         if($_SESSION['menu'] == 'RemoteD'){
 if($_SERVER["REQUEST_METHOD"] == "POST"){

      
         
$name = $_REQUEST["button4"];
//echo $name;
$sendtoboard = "SELECT setup.Msg FROM setup INNER JOIN remote ON setup.ID = remote.ID WHERE remote.ID_Botton = '$name'";
//echo $sendtoboard;
$sendDATA= mysqli_query($con,$sendtoboard);
$pie;
while($row = mysqli_fetch_array($sendDATA,MYSQLI_BOTH)){
   
  echo $row['Msg'];
 $pie  =$row['Msg'];

} 
echo "<script>  microgear.chat('ESPChat','$pie' ); </script>  ";

        }

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
    
<h1>FAN 2</h1>
<div class="container">
  <center>
    <div class="card bg-dark" style="width:250px; height:340px;"> 
      <br>
       <form method="post" action="ControlMode.php?menu=RemoteD">
      <div class="row">
        <div class="col col-md-6">
        <button value="401" name="button4"    style="width: 45px; height: 60px;"></button></a> 
        <h6 style="color: white";>TIMER </h6>
        </div>
   
        <div class="col  col-md-6" >     <br>
          <button value="402" name="button4"  style="width: 60px; height: 60px;"></button></a> 
        <h6 style="color: white";>OFF</h6>
        </div>
      </div>
      
        <div class="row" style="margin-top: 0px;" >
        <div class="col col-md-6">
        <button value="403" name="button4"  style="width: 45px; height: 60px;"></button></a> 
        <h6 style="color: white";>NATULRAL</h6>
        </div>
        <div class="col col-md-6"><br><br>
          <button value="404" name="button4"  style="width: 60px; height: 60px;" ></button></a>  
             <h6 style="color: white";>ON/SPEED</h6>
        </div>
       
      </div>

      <div class="row" style="margin-top: -20px;" >
        <div class="col col-md-6">
      <button value="405" name="button4"  style="width: 45px; height: 60px;"></button></a> 
        <h6 style="color: white";>SWING</h6>
        </div>
        <div class="col col-md-6"><br><br>
        </div>
       
      </div>


</form>

  </center>
    </div>  

                      ';
       }
      
     
     

        ?>