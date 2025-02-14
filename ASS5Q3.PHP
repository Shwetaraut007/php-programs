<html>
    <body>
         <form method="post"action="#">
             <h1>Employee Details</h1>
                 emp name:
                   <input type="text"name="t1"><br>
                 emp address:
                    <textarea name="t2"></textarea><br>
              <hr>
                   <h1>Earning Details</h1>
                         emp basic sal:
                               <input type="text"name="t3"><br>
                         DA:
                               <input type="text"name="t4"><br>
                         HRA:
                                <input type="text"name="t5"><br>
                                   <input type="submit">
              </hr>
         </form>
    </body>
</html>
<?php
          $n=$_POST["t1"];
          $ad=$_POST["t2"];
          $bsal=$_POST["t3"];
          $da=$_POST["t4"];
          $hra=$_POST["t5"];
       $tsal=$bsal+$da+$hra;
       echo("<table border=1>");
       echo("<tr>");
              echo("<td>emp name:</td>");
              echo("<td>$n</td>");
       echo("</tr>");
        echo("<tr>");
              echo("<td>emp address:</td>");
              echo("<td>$ad</td>");
       echo("</tr>");
       echo("<tr>");
              echo("<td>basic salary:</td>");
              echo("<td>$bsal</td>");
       echo("</tr>");
        echo("<tr>");
              echo("<td>DA:</td>");
              echo("<td>$da</td>");
       echo("/tr");
        echo("<tr>");
              echo("<td>HRA:</td>");
              echo("<td>$hra</td>");
       echo("</tr>");
        echo("<tr>");
              echo("<td>total salary:</td>");
              echo("<td>$tsal</td>");
       echo("</tr>");
      echo("</table>");
?>












