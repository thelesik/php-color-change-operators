<?php
echo "<!DOCTYPE HTML>
<html>
 <head>
  <meta charset=\"utf-8\">
  <title>colors</title>
 </head>
</html>
";
$phrase  = "3++45-48*67%3|&4";
$h = array("+", "-", "*", "%","|","&");
$y   = array("<span style=\"color: red\">+</span>", "<span style=\"color: red\">-</span>", "<span style=\"color: red\">*</span>", "<span style=\"color: red\">%</span>","<span style=\"color: red\">!</span>","<span style=\"color: red\">|</span>","<span style=\"color: red\">&</span>");
$newphrase = str_replace($h, $y, $phrase);
echo $newphrase;
?>
