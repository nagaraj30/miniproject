<?php session_start(); ?>
<html>
<body>
<head>
<meta charset="utf-8"/>
	<title>Review System</title>
	<link rel="stylesheet" href="https://localhost/miniproject/img.css">
<link rel="stylesheet" type="text/css" href="fetch.css" />
<link rel="stylesheet" href="main.css" type="text/css" media="screen" />
<style>
.img 
{
  display: inline;
  margin: 5px;
  border: 1px solid #ffffff;
}
body {behavior: url("csshover3.htc");}
#menu li .drop {background:url("img/drop.gif") no-repeat right 8px; 
}

.label {  
    display: inline-block;  
    cursor: pointer;  
    position: relative;  
    padding-left: 25px;  
    margin-right: 15px;  
    font-size: 13px;  
}  
</style>
<script>
var count=0;
 function check()
 {
   if(document.getElementById('a').checked || document.getElementById('e').checked || document.getElementById('j').checked) {
    window.location="http://localhost/miniproject/nextpro.php";
}
	
 }
</script>
</head>
<body>

      <h1 font="500px" align="center" padding="1px" class="drop">Online Customer Review System</h1>
     

<ul id="menu">
    
    <li><a href="http://localhost/miniproject/home.html" class="drop">Home</a><!-- Begin Home Item -->
    
    
     
    </li><!-- End Home Item -->
 
    <li><a href="#" class="drop">About Us</a><!-- Begin 5 columns Item -->
     
    
     
    
     
    </li><!-- End 4 columns Item -->
 
    <li class="menu_right"><a href="#" class="drop">Compare</a>
     
        <div class="dropdown_1column align_right">
         
                <div class="col_1">
                 
                    <ul class="simple">
                        <li><a href="http://localhost/miniproject/fetch.html">Site Comparision</a></li>
                        <li><a href="http://localhost/miniproject/pro.html">Product  Comparision</a></li>
                        
                        
                    </ul>   
                      
                </div>
                 
        </div>
  

         
    </li>
 
    
    </li><!-- End 3 columns Item -->


 
</div>
  </div>
</div>


  </div>
</div>
</ul>
<center>
<?php
   @$_SESSION['site']=$_GET['radio'];
    $adr="htpp://localhost/miniproject/cmp.php";
   if( $_SESSION['site'])
   
   {
       
	  echo "<form action='cmp.php' method='get'>";
echo "<br><br>enter product 1: <input type='text' name='prod1' required='required'>
                enter product  2:<input type='text' name='prod2' required='required'><br><br>	   
				<input type='submit' value='compare' class='tfbutton'><br>";
				echo "</form>";
   }
 else 
  echo "please chose shopping site";


?>
</center>




</body>
</html>