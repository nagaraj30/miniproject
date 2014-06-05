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

      <i><font color="#080808"><marquee><h1 font="500px" align="center" padding="2px" class="drop">ONLINE CUSTOMER REVIEW SYSTEM</h1></marquee></font></i>
     

<ul id="menu">

       <li><a href="http://localhost/miniproject/home.html" class="drop">Home</a><!-- Begin Home Item -->
      <li><a href="http://localhost/miniproject/review.html" class="drop">Reviews</a>    
    
    
    
     
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
   
  <!--<li><h1 font="250px" align="center" padding="2px" class="drop">Online Customer Review System</h1></li> -->
         
    </li>
 
    
    </li><!-- End 3 columns Item -->

	

 
</div>
  </div>
</div>


  </div>
</div>
</ul>
<br><br>

<br><br>
<center>


<?php

$url="login.php";
$username=$password="";
$count=1;
if ($_SERVER["REQUEST_METHOD"] == "POST")
{ 
    $username=$_POST["uname"];
     $password=$_POST["passwd"];
    $_SESSION['uname']=$username;
     $_SESSION['passwd']=$password;
   if(!empty($_POST["uname"])&& ! empty($_POST["passwd"]))
  {
      @$conn=mysql_connect("localhost","root","") or die("unable to connect");
      $query="select uname,password from customer where uname='$username' and password='$password'";
      @$result= mysql_db_query("review",$query) or die("unable execute query");
     $array=mysql_fetch_row($result);
	 if($array[0]==$username && $array[1]==$password)
	 {
	      header( 'Location: http://localhost/miniproject/write.php' ) ;

	 }
	   else
	         $count=0;
	    
   }
}
?>

<h1><i>LOGIN</i></h1><br>
<form   method="POST" action="http://localhost/miniproject/review.php">
username  <input type="text" name="uname" placeholder="username" required="required"/ title="username can't be blank"  ><br>
passowrd <input type="password" name="passwd"placeholder="password" required="required"/ title="password can't be blank" ><br><br>
<input type='submit' value='submit' class='tfbutton'><br>;

</form>
<?php
  if($count==0)
  {
   echo "<h2><i>login incorrect</i></h2>";
   }
   ?>

<h2><font color="#777777">Not yet Registered???? </font><form action="http://localhost/miniproject/register.php" method="get"> <input type='submit' value='Register Now' ><br></h2></form>
</center>
</body>
</html>