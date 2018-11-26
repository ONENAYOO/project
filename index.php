
<script src="https://cdn.netpie.io/microgear.js"></script>
<script>
  const APPID = "Testwittawat";
  const KEY = "rd0xdfHaxoTOFTn";
    const SECRET = "SyigaZHzxEa16H9EiWEI4VS82";
  const ALIAS = "HTMLChat";

  var microgear = Microgear.create({
    gearkey: KEY,
    gearsecret: SECRET,
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

}
</script>


<br><br>
<center><h1>Universal Box Remote</h1></center>
<br><br>

</style>
  
  	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </head>
  <body>     <center>
<div class="container">
 
    	<br>
		 	<div class="row">
	 <div class="col Col-sm-4">   </div>
		 		<div class="col Col-sm-2">   
     <a href="SettingMode.php">  <button onclick ="return Remote('Set') " style="max-width: 150px; height: 100px; ">Setup Mode    </button></a> 
		 		</div>
         
		 		<div class="col  Col-sm-2" >  
           <a href="ControlMode.php"><button onclick ="return Remote('Con') " style="max-width: 350px; height: 100px;">Control Mode</button></a> 
		 		</div>
		   <div class="col Col-sm-4">   </div>
		 	</div>
      
       

      
      
       
    </div>
 </center>
