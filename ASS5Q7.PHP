<html>
    <body>
       <form method="get"action="#">
           enter name:
              <input type="text"name="t1"><br>
           enter email address:
              <input type="text"name="t2"><br>
           enter age:
              <input type="text"name="t3"><br>
              <input type="submit"value="ok">
       </form>
    </body>
</html>
<?php
          $n=$_GET["t1"];
          $ea=$_GET["t2"];
          $a=$_GET["t3"];
      if(!filter_var($ea,FILTER_VALIDATE_EMAIL))
           die("invalid email");
       if(!filter_var($ea,FILTER_VALIDATE_INT))
           die("invalid age");
              {
                echo("<br>name=".$n);
                echo("<br>email=".$ea);
                echo("<br>age=".$a);
              }
?>