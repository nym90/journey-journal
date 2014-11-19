<!DOCTYPE html>
<html lang="en">
<head>
	<title >Main</title>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="icon.ico">
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
 

 <div class = "head">
  <p align="middle"> 
    <img src="logo.png"   style="width:270px;height:150px">
  </p>

</div>

<div class = "body">
	<div class = "box">
  <p class = "articleText" align="left"> 

    <?php 
       $name="lr123";
       $login=$_GET["username"];
       $pass="12345";
       echo $_GET["password"];
       if ($name == $login && (!isset($_GET["password"]) || $_GET["password"] != $pass)) {
       header( 'Location: http://csserver.evansville.edu/~nm112/cs350/JourneyJournal/posts.html' ) ;
       } ?>

  	Hi  <font color='red'><?php
	if (!isset($_GET["username"])) {
	?><meta http-equiv="refresh" content="0; url=http://csserver.evansville.edu/~nm112/cs350/JourneyJournal/login.html" />
	<?php } 
	   echo $_GET["username"]; ?>
	</font>
, </br></br>
  	Welcome to Journey Journal! This is an awesome article written by an awesome journalist who loves to travel 
  	around the world! Our journalist is now busy travelling the world and having fun while you
  	are reading this. Don't worry though, you will see lots of cool stories here 
  	which will make you jealous. This is a test article for now, come back later and you will see
  	exciting stories from the journalist. If you have any questions and comments please do not
  	hesitate to contact us.</br></br>
  	Best, </br></br>

  	<b>Team Awesome</b></br>
  	team@awesome.com</br>
  	1-800-AWESOME</br>
  </p>
  </div>

</div>

   

<center><p>&#169 Team Awesome 2014</p></center>	
</body>
</html>





