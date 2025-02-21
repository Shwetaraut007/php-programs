<html>
 <body>
  <form method="get" action="#">
 Select Class:<br>
     <select name="t1">
    <option value="FY">FY</option>
    <option value="SY">SY</option>
    <option value="TY">TY</option>
 </select><br>
  Select Class:<br><br>
     <select name="t2[]" multiple="multiple">
    <option value="JAVA">JAVA</option>
    <option value="PHP">PHP</option>
    <option value="Python">Python</option>
 </select><br><br>
   <input type="submit">
</form>
 </body>
</html>
<?php
 if(isset($_GET["t1"]))
   {
     $g=$_GET["t1"];
       echo("<br>select calss=".$g);
     }
 else
     echo("Select class"); 
if(isset($_GET["t2"]))
   {
     $c=$_GET["t2"];
       echo("<br> Subject =");
        print_r($c);    
}
 else
 echo("Select  subject")
?>