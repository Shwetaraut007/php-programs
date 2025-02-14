<html>
    <body>
       <form method="get"action="#">
           enter name:
              <input type="text"name="t1"><br>
           enter address:
              <input type="text"name="t2"><br>
           enter pincode:
              <input type="text"name="t3"><br>
           enter gender:
              <input type="radio"name="r1"value="male">male
                     <input type="radio"name="r1"value="female">female<br>
              <input type="submit"value="ok">
       </form>
    </body>
</html>
<?php
            if(isset($_GET["t1"]) && isset($_GET["t2"]) && isset($_GET["t3"]) && isset($_GET["r1"]))
                 {
                       $n=$_GET["t1"];
                       $add=$_GET["t2"];
                       $p=$_GET["t3"];
                       $g=$_GET["r1"];
                             {
                                  echo("<br>name=".$n);
                                  echo("<br>address=".$add);
                                  echo("<br>pincode=".$p);
                                  echo("<br>gender=".$g);
                            }
                 }
            else
                {
                     echo("all fields are required");
                }
?>