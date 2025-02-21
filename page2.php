<?php
    session_start();
    $n=$_POST["t1"];
    $add=$_POST["t2"];
    $ph=$_POST["t3"];
 $_SESSION["name"]=$n;
 $_SESSION["address"]=$add;
 $_SESSION["phone"]=$ph;
?>
<html>
 <body>
 <h1>Shopping Datails</h1>
  <form method="post" action="page3.php">
    Product Name:
     <input type="text" name="t4"><br>
    Product Price:
     <input type="text" name="t5"><br>
    Quantity:
     <input type="text" name="t6"><br>
    <input type="submit"  value="next"><br>
 </form>
</body>
 </html>