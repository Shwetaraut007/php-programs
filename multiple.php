<html>
    <form method="post"action="#">
        enter no:
        <input type="text"name="t1"><br>
        <input type="submit"value="ok"
    </form>
</html>



<?php
    $num=$_post["t1"];
     for($i=1;$i<=10;$i++)
    echo("<br>".$num*$i);
  ?>