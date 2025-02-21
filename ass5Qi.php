<html>
 <body>
  <form method="get" action="#">
 Enter Student Name:
   <input type="text" name="t1" ><br>
   Course Name:
 <input type="text" name="t2" ><br>
  Mobile No:
 <input type="text" name="t3" ><br>
   <input type="submit">
</form>
 </body>
</html>
 <?php
     $n=$_GET["t1"];
     $cn=$_GET["t2"];
     $mn=$_GET["t3"];
    $f=0;
     for($i=0;$i<strlen($n);$i++)
 {
   if(!(($n[$i]>='A' && $n[$i]<='Z')||(($n[$i]>='a' && $n[$i]<='z'))))
  $f=1;
 }
 if($f==1)
   die("name contains only characters");
     if(filter_var($mn,FILTER_VALIDATE_INT)==false)
       die("plz mobile no contains only digit");
   if(strlen($mn)!=10)
       die("Plz enter only 10 digit");
  echo("<br> Name=".$n);
  echo("<br> Course Name=".$cn);
 echo("<br>Mobile No=".$mn);
?> 
