<?php

ini_set('max_execution_time', 300);
$var_proa=$_GET["a"];
echo "$var_proa<br>";
for ($i=0; $i<strlen($var_proa); $i++){
   if ($var_proa[$i]==' '){
       $var_proa[$i]='+';
   }
}

$display=file_get_contents("http://www.amazon.in/s/ref=nb_sb_noss_2?url=search-alias%3Daps&field-keywords=$var_proa");

//echo "$var_proa";

$find1='<div id="result_0"';
$pos=strpos($display,$find1);

$new=substr($display,$pos);

$find2='<div id="result_1"';
$pos2=strpos($new,$find2);

$done=substr($new,0,$pos2);

echo "$done";




//b
ini_set('max_execution_time', 300);
$var_prob=$_GET["b"];
echo "$var_prob<br>";
for ($i=0; $i<strlen($var_prob); $i++){
   if ($var_prob[$i]==' '){
       $var_prob[$i]='+';
   }
}

$display=file_get_contents("http://www.amazon.in/s/ref=nb_sb_noss_2?url=search-alias%3Daps&field-keywords=$var_prob");


//echo "$var_prob";

$find1='<div id="result_0"';
$pos=strpos($display,$find1);

$new=substr($display,$pos);

$find2='<div id="result_1"';
$pos2=strpos($new,$find2);

$done=substr($new,0,$pos2);

echo "$done";
?>