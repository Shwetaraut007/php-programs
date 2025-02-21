<html>
 <body>
  <form method="get" action="#">
  Select Language:
   <input type="checkbox" name="t1[]" value="PHP">PHP<br>
  <input type="checkbox" name="t1[]" value="JAVA">JAVA<br>
  <input type="checkbox" name="t1[]" value="Python">Python<br>
  <input type="checkbox" name="t1[]" value="DSA">DSA<br>
   <input type="submit">
</form>
 </body>
</html>
<?php 
  if(isset($_GET["t1"]))
   {
    $lan=$_GET["t1"];
     echo("Select subjected:");
        foreach($lan as $t)
    {   
         echo("<br>");
           print_r($t);  
     }
  }
 else
   echo("select subject");
?>