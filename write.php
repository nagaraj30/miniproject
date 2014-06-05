<?php session_start(); ?>
<html>
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
.error {color: #FF0000;
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
      <li><a href="http://localhost/miniproject/review.php" class="drop">Reviews</a>    
    
    
    
     
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
$uname=$_SESSION['uname'];
echo "<font color='#282828'><h1>WELCOME      $uname<br><h1></font>";
if($_SERVER['REQUEST_METHOD']=="POST")
{
        $username=$_SESSION['uname'];
		
		$comment=$_POST['comment'];
		if($comment)
		{
		  @$conn=mysql_connect("localhost","root","") or die("unable to connect");
	       $query="insert into reviews values('$comment','$username')";
        @mysql_db_query("review",$query) or die("unable  to execute query");
		   echo "<font color='#282828'><h3>review posted succesfully</h3></font>";
		    @mysql_close($conn);
			session_destroy();
		 }
		 
}
?>
<br><br>
<h2><font color="#0b0909"<p>Write a Review</p></font></h2>
<form action="http://localhost/miniproject/write.php" method="post">
<textarea name="comment" rows="5" cols="40"/></textarea><br><br><br>
<input type="submit" value="submit" class="tftbutton">
</form>
</center>
<?php
  @$conn=mysql_connect("localhost","root","") or die("unable to connect");
  $query="select * from reviews";
  $result=@mysql_db_query("review",$query) or die("unable  to execute query");
  echo "<br>
<h1><br>PREVIOUS REVIEWS<BR></h1>";

 while($array=mysql_fetch_row($result))
    {
       echo "   
                    <textarea name='comment' rows='5' cols='40'/> $array[0]
                                 - $array[1]</textarea><br><br><br>    
						   <br><br><br>";
						   }
?>

</body>
</html>