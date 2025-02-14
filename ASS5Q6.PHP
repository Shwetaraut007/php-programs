<html>
    <body>
       <form method="POST"action="#">
           enter student name:
              <input type="text"name="t1"><br>
           select language:
              <select name="s1">
                  <option value="PHP">PHP</option>
                  <option value="DSA">DSA</option>
                  <option value="JAVA">JAVA</option>
                  <option value="PYTHON">PYTHON</option>
              <select><br>
              <input type="submit">
       </form>
    </body>
</html>
<?php
            $n=$_POST["t1"];
            $lang=$_POST["s1"];
           echo("<br>student name=".$n);
           echo("<br>select language=".$lang);
?>