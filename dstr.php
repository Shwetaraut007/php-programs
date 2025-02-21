<html>
  <body>
   <form method="post" action="#">
    Enter string:
 <input type="text" name="t1"><br>
  <input type="radio" name="r1" value="aa">
   Length of string<br>
 <input type="radio" name="r1" value="bb">
   vowel count<br>
<input type="radio" name="r1" value="cc">
   lower & tittle case<br>
<input type="radio" name="r1" value="dd">
  padding both side<br>
<input type="radio" name="r1" value="ee">
    remove spaces<br>
<input type="radio" name="r1" value="ff">
    reverse string<br>
 <input type="submit">
   </form>
 </body>
</html>
<?php
 $s=$_POST["t1"];
 $ch=$_POST["r1"];
  
 function string_length($s)
{
  {
  for($i=0;isset($s[$i]);$i++);
   return $i;
} 
 
 echo("<br> length=".string_length($s));
}
function vowels_count($s)
 {
  $c=0;
 for($i=0;$i<strlen($s);$i++)
   {
    if($s[$i]=="a"||$s[$i]=="e"||$s[$i]=="i"||$s[$i]=="o"||$s[$i]=="u")
      $c=$c+1;
   }
 echo("<br> vowels count=".$c);
 }
  switch($ch)
 {
   case "aa":string_length($s);
            break; 
  case "bb":vowels_count($s);
            break; 

  case"cc":echo("<br>title string=".ucwords($s));
           echo("<br>lower case=".strtolower($s));
           break; 
  case"dd": $s1=str_pad($s,10,"*");    
            echo("<br> padding string=".$s1);
               break; 
   case"ee":$s1=ltrim($s);
              echo("<br> remove spaces=".$s1);
            break; 
  case"ff":$s1=strrev($s);
              echo("<br> reveres string=".$s1);
            break; 
  default:echo("<br>invalid choice");

 }
?>