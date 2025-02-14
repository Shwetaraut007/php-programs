<?php
     session_start();
       $sno=$_POST["t1"];
       $n=$_POST["t2"];
       $c=$_POST["t3"];
       $_SESSION["setno"]=$sno;
       $_SESSION["name"]=$n;
       $_SESSION["class"]=$c;
<html>
    <body>
      <h1>Student Details</h1>
       <form method="post"action="ASS5Q6ii.php">
           select subject marks:
              <input type="checkbox"name="t4"value="DSA">DSA<br>
              <input type="checkbox"name="t5"value="PHP">PHP<br>
              <input type="checkbox"name="t6"value="JAVA">JAVA<br>
              <input type="checkbox"name="t7"value="CPP">CPP<br>
              <input type="submit"value="next"><br>
      </form>
    </body>
</html>