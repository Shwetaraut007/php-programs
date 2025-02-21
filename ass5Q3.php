<html>
 <body>
  <form method="get" action="#">
phone  no:
   <input type="text" name="t1" ><br>
   <input type="submit">
</form>
 </body>
</html>
 <?php
 $no=$_GET["t1"];
 if(filter_var($no,FILTER_VALIDATE_INT))
  {
      if(strlen($no)==10)
        {
         echo("valid number=".$no);
        }
     else
     {
       echo(" number conteins only digit");
    } 
}
 else
  {
    echo("number contains only digit");
 }
 ?>