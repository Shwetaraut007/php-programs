<html>
  <body>
    <form method="post" action="#">
     enter no:
     <input type="text" name="t1"><br>
    <input type="submit">  
   </form>
  </body>
</html>
<?php
 $n=$_POST["t1"];
  $s=0;
 for($i=0;$i<strlen($n);$i++)
{
   $d=$n%10;
   $s=$s+$d;
  $n=$n/10;
}
 echo("sum of digit=".$s);
?>