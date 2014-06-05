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

</style>
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




<br><br>
<br><br><br><br>
<center>
<div id="tfheader">
		<form id="tfnewsearch" method="POST" action="http://localhost/miniproject/parse.php">
		        <input type="text" class="tftextinput" name="product" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
		</form>
	
	<div class="tfclear"></div>
	
	</div>
	</header>


	<!-- HTML for SEARCH BAR -->

	
	
	<div class="tfclear"></div>
	
	</div>
</form>
</center>
<?php
ini_set('max_execution_time', 300);
$var_pro=$_POST["product"];
for ($i=0; $i<strlen($var_pro); $i++){
   if ($var_pro[$i]==' '){
       $var_pro[$i]='+';
   }
}

/*Amazon Prod details*/
echo '<div id="wrapper">';
echo '<div class="left">';
echo '<h1>AMAZON RESULTS</h1>';
$adisplay = file_get_contents("http://www.amazon.in/s/ref=nb_sb_noss_2?url=search-alias%3Daps&field-keywords=$var_pro");


$afind1='<div class="image imageContainer">';

$anum=strlen($adisplay);
$apos1=strpos($adisplay,$afind1);
$acutt=substr($adisplay,$apos1);

$afind2='<li class="seeAll">';

$apos2=strpos($acutt,$afind2);
$acutb=substr($acutt,0,$apos2);

echo "$acutb<br><br><br><br><br>";
echo "</div>";


/*ebay Prod details*/
echo '<div class="right">';
echo '<h1>EBAY RESULTS</h1>';
$edisplay = file_get_contents("http://www.ebay.in/sch/i.html?_trksid=p2050601.m570.l1311.R1.TR10.TRC0.A0.H0.X$var_pro+&_nkw=$var_pro+&_sacat=0&_from=R40");


$efind1='<div class="picW">';

$enum=strlen($edisplay);
$epos1=strpos($edisplay,$efind1);
$ecutt=substr($edisplay,$epos1);

$efind2='</tbody>';

$epos2=strpos($ecutt,$efind2);
$ecutb=substr($ecutt,0,$epos2);

echo "$ecutb<br>";
echo "</div>";


/*junglee Prod details*/
echo '<div class="right">';
echo '<h1>JUNGLEE RESULTS</h1>';
$jdisplay = file_get_contents("http://www.junglee.com/mn/search/junglee/ref=nav_sb_noss?url=search-alias%3Daps&field-keywords=$var_pro");


$jfind1='<div id="result_0" class="result firstRow product celwidget"';

$jnum=strlen($jdisplay);
$jpos1=strpos($jdisplay,$jfind1);
$jcutt=substr($jdisplay,$jpos1);

$jfind2='<div class="reviewsCount">';

$jpos2=strpos($jcutt,$jfind2);
$jcutb=substr($jcutt,0,$jpos2);

echo "$jcutb";
echo "</div>";

echo "</div>";
?>
</body>
</html>