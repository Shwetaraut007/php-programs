<?php
   session_start();

$n=$_POST["t1"];
  $q=$_POST["t2"];
  $s=$_POST["t3"];

    $_SESSION["name"]=$n;
    $_SESSION["quantity"]=$q;
    $_SESSION["sold"]=$s;
  ?>
  <html>
<body>
<form method="post" action="ass6Q9ii.php">
  <h3> sales details</h3>
  Product name:
  <input type="text" name="t1"><br>
   Date:
  <input type="date" name="t2"><br>
 Total  sale:
  <input type="text" name="t3"><br>
<input type="submit" value="next">
</form>
</body>
</html>