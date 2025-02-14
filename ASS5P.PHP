<html>
    <body>
       <form method="get"action="#">
           enter mobile no:
              <input type="text"name="t1"><br>
              <input type="submit"value="ok">
       </form>
    </body>
</html>
<?php
           $no=$_GET["t1"];
             if(filter_var($no,FILTER_VALIDATE_INT))
              {
                    if(strlen($no)==10)
                       echo("valid phone number=".$no);
                    else
                       echo("mobile number contains 10 digits");
               }
             else
                {
                   echo("mobile number contains only digits");
                }
?>