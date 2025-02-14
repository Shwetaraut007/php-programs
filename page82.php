<?php
session_start();
$_SESSION["page2_time"]=time();
$_SESSION["name"]=$_POST["t1"];
$_SESSION["add"]=$_POST["t2"];
$_SESSION["bd"]=$_POST["t3"];
$_SESSION["mob"]=$_POST["t4"];
?>
<html>
    <body>
      <h1>Flight details</h1>
          <form method="post"action="page83.php">
            Flight Name:
               <input type="text"name="t1"><br>
            Source:
               <input type="text"name="t2"><br>
            Destination:
               <input type="text"name="t3"><br>
            Departure Date:
               <input type="text"name="t4"><br>
            Departure Time:
               <input type="text"name="t5"><br>
            Charges:
               <input type="text"name="t6"><br>
               <input type="submit"value="next">
          </form>
    </body>
</html>