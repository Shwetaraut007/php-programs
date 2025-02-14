2>ASS6Q4i.php
<?php
       session_start();
        $sno=$_post["t1"];
        $name=$_post["t2"];
        $c=$_post["t3"];
        $_SESSION["sno"]=$no;
        $_SESSION["name"]=$name;
        $_SESSION["c"]=$c;
 ?>
<html>
   <body>
       <form method="post"action="page12.php">
           <h1>select subject marks</h1>
               PHP:
              <input type="text"name="t1"><br>
                DSA:
              <input type="text"name="t2"><br>
                JAVA:
              <input type="text"name="t3"><br>
               	CPP:
              <input type="text"name="t4"><br>
               <input type="submit"value="next">
       </form>
  </body>
</html>