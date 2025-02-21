<body bgcolor='pink'>
<?php
    session_start();
    $name=$_POST["t1"];
    $eadd=$_POST["t2"];
    $sadd=$_POST["t3"];
    $mp=$_POST["t4"];

 $_SESSION["name"]=$name;
 $_SESSION["eaddress"]=$eadd;
 $_SESSION["shipping address"]=$sadd;
 $_SESSION["modepayment"]=$mp;

?>
</font>
</body>
<html>
 <body>
<font color='red'>
<h1>Purchase Details:</h1>
  <form method="post" action="ass6Q10ii.php">
      Price:
         <input type="text" name="t5" ><br>
       Quantity:    
   <input type="text" name="t6"><br>
        <input type="submit"  value="next"><br>
 </form>
</body>
 </html>