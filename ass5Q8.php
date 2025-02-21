<html>
 <body>
  <form method="post" action="#">
    enter name:
    <input type="text"  name="t1"><br>
    enter language:
     <select name="t2">
      <option value="java">java</option>
     <option value="PHP">PHP</option>
    <option value="Python">Python</option>
   <option value="DSA">DSA</option>
</select><br>
     <input type="submit"><br>
 </form>
</body>
</html>
<?php
 $n=$_POST["t1"];
 $se=$_POST["t2"];
 echo("<br> Student Name=".$n);
 echo("<br> Select Sub Name=".$se);


?>