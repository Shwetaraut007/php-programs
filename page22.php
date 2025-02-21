<?php
    session_start();
    $fn=$_POST["t1"];
    $fs=$_POST["t2"];
    $fc=$_POST["t3"];
   $bc=$_POST["t4"];

   $_SESSION["font_style"]=$fn;
   $_SESSION["font_size"]=$fs;
  $_SESSION["font_color"]=$fc;
  $_SESSION["background_color"]=$bc;

 echo("<br> font style=".$fn);
 echo("<br> font size=".$fs);
 echo("<br> font color=".$fc);
 echo("<br> background color=".$bc);

?>
<html>
   <body>
        <form method="post" action="page33.php">
            <input type="submit" value="NEXT">
       </font>
  </body>
</html>