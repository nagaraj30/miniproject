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



<?php
// define variables and set to empty values
$uname=$fname =$lname= $occupation = $contact= $address= $password=$repassword="";
$unameErr=$fnameErr =$lnameErr= $occErr = $addressErr =$contactErr=$passwordErr=$repasswordErr= "";
$count=0;

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   if(empty($_POST["uname"]))
   $unameErr="name is required";
   else
{
   $uname = test_input($_POST["uname"]);
   if (!preg_match("/^[a-zA-Z1-9 ]*$/",$uname))
      {
      $unameErr = "Only letters and white space allowed"; 
      }
	  else 
	        $count++;
}
     if(empty($_POST["fname"]))
    $fnameErr="email is requied";
    else
    {
   $fname= test_input($_POST["fname"]);
   if (!preg_match("/^[a-zA-Z ]*$/",$fname))
      {
      $fnameErr = "Invalid email format"; 
      }
	     else 
	        $count++;
   }

      if(empty($_POST["lname"]))
    $lnameErr="email is requied";
    else
    {
   $lname= test_input($_POST["lname"]);
   if (!preg_match("/^[a-zA-Z ]*$/",$lname))
      {
      $lnameErr = "Invalid email format"; 
      }
	     else 
	        $count++;
   }
   
      if(empty($_POST["occupation"]))
    $occErr="email is requied";
    else
    {
   $occupation= test_input($_POST["occupation"]);
   if (!preg_match("/^[a-zA-Z ]*$/",$occupation))
      {
      $occErr = "Invalid occupation  format"; 
      }
	     else 
	        $count++;
   }
    if(empty($_POST["contact"]))
    $contactErr="contact is requied";
    else{
   $contact = test_input($_POST["contact"]);
	        $count++;
			}


  if(empty($_POST["password"]))
    $passwordErr="password is requied";
   else{
   $password = test_input($_POST["password"]);
    $count++;
       }
  if(empty($_POST["repassword"]))
    $repasswordErr="password is requied";
   else
   {
   $repassword = test_input($_POST["repassword"]);
    $count++;
	}

   $address=$_POST["comment"];

	 
	 if($count==7)
{
    @$conn=mysql_connect("localhost","root","") or die("unable to connect");
	$query="insert into customer values('$uname','$fname','$lname','$occupation','$contact','$password','$address')";
	@mysql_db_query("review", $query)  or  die("username already registered");
     echo "<CENTER><h1 class=\"reg\"><i>REGISTRATION SUCCESFULL</i>   <a href=\"http://localhost/miniproject/review.php\">SIGN IN</a></h1></CENTER>";
	 
   }
}

function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}


?>
<center>
<h2><i>Registration Form</i></h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="http://localhost/miniproject/register.php"> 
  
    <label for="radio"> Username <input type="text" name="uname" required="required"  pattern="[0-9a-zA-Z]+"></label></li>
   <span class="error" >* <?php echo $unameErr; ?></span>
   <br><br>
   
   <label for="radio"> First name <input type="text" name="fname" required="required" ></label></li>
   <span class="error" >* <?php echo $fnameErr; ?></span>
   <br><br>
   
   <label for="radio"> lastname <input type="text" name="lname" required="required" ></label></li>
   <span class="error" >* <?php echo $lnameErr; ?></span>
   <br><br>
   
    <label for="radio">Occupation<input type="text" name="occupation" required="required" ></label></li>
    <span class="error">* <?php echo $occErr; ?></span>
   <br><br>
   
      <label for="radio">Contact no <input type="text" name="contact" maxlength="10"  pattern="[0-9]+" required="required" /></label></li>
	 <span class="error">* <?php echo $contactErr; ?></span>
   <br><br>
   
    <label for="radio">password <input type="password" name="password" required="required" ></label></li>
    <span class="error">* <?php echo $passwordErr; ?></span>
   <br><br>
   
    <label for="radio">retype password  <input type="password" name="repassword" required="required" ></label></li>
     <span class="error">* <?php echo $repasswordErr;
                                                if($password!=$repassword)
                                                    echo "password didn't match"; ?></span>
   <br><br>
   
    <label for="radio">Address <textarea name="comment" rows="5" cols="40"></textarea></label></li>
   <br><br>
   
   
<input type="submit" value="submit">
</form>
</center>
<?php
   

?>

</body>
</html>