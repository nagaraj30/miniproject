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
div.wrapper {
    overflow:auto;
    background:red;
    width:940px;
    display:block;
	align:center;
}
div.left, .right {
    display:inline;
    float:left;
    height:540px;
    width:540px;
   
    margin:10px;
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
echo "<form action='cmp.php' method='get'>";
echo "<br><br>enter product 1: <input type='text' name='prod1' required='required'>
                enter product  2:<input type='text' name='prod2' required='required'><br><br>	   
				<input type='submit' value='compare' class='tfbutton'><br>";
				echo "</form><br>";

				

				?>
				</center>
				<center>
<?php
ini_set('max_execution_time', 300);
$site=$_SESSION['site'];
$var_pro1=$_GET['prod1'];
$pro1=$var_pro1;
for ($i=0; $i<strlen($var_pro1); $i++){
   if ($var_pro1[$i]==' '){
       $var_pro1[$i]='+';
   }
}
$var_pro2=$_GET['prod2'];
$pro2=$var_pro2;
for ($i=0; $i<strlen($var_pro2); $i++){
   if ($var_pro2[$i]==' '){
       $var_pro2[$i]='+';
   }
}
//echo '<div id="site" style="height:300px;width:500px;float:center;">';
echo '<div id="wrapper">';
if($site=="amazon")
{

echo '<h1>AMAZON RESULTS</h1>';
echo '<div class="left">';
echo"<br><h1>$pro1</h1><br>";
$adisplay = file_get_contents("http://www.amazon.in/s/ref=nb_sb_noss_2?url=search-alias%3Daps&field-keywords=$var_pro1");


$afind1='<div class="image imageContainer">';

$anum=strlen($adisplay);
$apos1=strpos($adisplay,$afind1);
$acutt=substr($adisplay,$apos1);

$afind2='<li class="seeAll">';

$apos2=strpos($acutt,$afind2);
$acutb=substr($acutt,0,$apos2);
echo "$acutb<br><br><br>";
echo '</div>';
echo ' <div class="right">';
echo"<br><h1>$pro2</h1><br>";
$adisplay = file_get_contents("http://www.amazon.in/s/ref=nb_sb_noss_2?url=search-alias%3Daps&field-keywords=$var_pro2");


$afind1='<div class="image imageContainer">';

$anum=strlen($adisplay);
$apos1=strpos($adisplay,$afind1);
$acutt=substr($adisplay,$apos1);

$afind2='<li class="seeAll">';

$apos2=strpos($acutt,$afind2);
$acutb=substr($acutt,0,$apos2);

echo "$acutb<br><br><br>";
echo '</div>';

}
else if($site=="ebay")
{

// echo '<div class="left">';
echo"<h1>$pro1</h1>";


$edisplay = file_get_contents("http://www.ebay.in/sch/i.html?_trksid=p2050601.m570.l1311.R1.TR10.TRC0.A0.H0.X$var_pro1+&_nkw=$var_pro1+&_sacat=0&_from=R40");


$efind1='<div class="picW">';

$enum=strlen($edisplay);
$epos1=strpos($edisplay,$efind1);
$ecutt=substr($edisplay,$epos1);

$efind2='</tbody>';

$epos2=strpos($ecutt,$efind2);
$ecutb=substr($ecutt,0,$epos2);

echo "$ecutb<br><br><br>";
//echo '</div>';
//echo ' <div class="right">';
echo"<h1>$pro2</h1>";
$edisplay = file_get_contents("http://www.ebay.in/sch/i.html?_trksid=p2050601.m570.l1311.R1.TR10.TRC0.A0.H0.X$var_pro2+&_nkw=$var_pro2+&_sacat=0&_from=R40");


$efind1='<div class="picW">';

$enum=strlen($edisplay);
$epos1=strpos($edisplay,$efind1);
$ecutt=substr($edisplay,$epos1);

$efind2='</tbody>';

$epos2=strpos($ecutt,$efind2);
$ecutb=substr($ecutt,0,$epos2);

echo "$ecutb<br>";
//echo '</div>';
}
else
{
echo '<div class="left">';
echo '<h1>JUNGLEE RESULTS</h1><br>';
echo"<h1>$pro1</h1><br><br>";
$jdisplay = file_get_contents("http://www.junglee.com/mn/search/junglee/ref=nav_sb_noss?url=search-alias%3Daps&field-keywords=$var_pro1");


$jfind1='<div id="result_0" class="result firstRow product celwidget"';

$jnum=strlen($jdisplay);
$jpos1=strpos($jdisplay,$jfind1);
$jcutt=substr($jdisplay,$jpos1);

$jfind2='<div class="reviewsCount">';

$jpos2=strpos($jcutt,$jfind2);
$jcutb=substr($jcutt,0,$jpos2);

echo "$jcutb<br><br>";
echo "</div>";
echo ' <div class="right">';
echo"<h1>$pro2</h1><br><br>";
$jdisplay = file_get_contents("http://www.junglee.com/mn/search/junglee/ref=nav_sb_noss?url=search-alias%3Daps&field-keywords=$var_pro2");


$jfind1='<div id="result_0" class="result firstRow product celwidget"';

$jnum=strlen($jdisplay);
$jpos1=strpos($jdisplay,$jfind1);
$jcutt=substr($jdisplay,$jpos1);

$jfind2='<div class="reviewsCount">';

$jpos2=strpos($jcutt,$jfind2);
$jcutb=substr($jcutt,0,$jpos2);

echo "$jcutb";
echo "</div>";
}
echo "</div>";
//echo "</div>";
?>
</center>
</body>
</html>