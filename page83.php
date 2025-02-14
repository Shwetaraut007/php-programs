<?php
  session_start();
 if(time()-$_SESSION["page2_time"]>100)
    {
       session_unset();
       session_destroy();
       header("location:p11.php");
    }
 
$name=$_SESSION["name"];
$add=$_SESSION["add"];
$bir=$_SESSION["bd"];
$phone=$_SESSION["mob"];

$fname=$_POST["t1"];
$s=$_POST["t2"];
$d=$_POST["t3"];
$dd=$_POST["t4"];
$dt=$_POST["t5"];
$c=$_POST["t6"];

echo("<h4>Cust Details.");
echo("<br>Name:".$name);
echo("<br>Address:".$add);
echo("<br>Birthdate:".$bir);
echo("<br>Mobile No:".$phone);
echo("<h4>Ticket Details.");
echo("<br>Flight Name:".$name);
echo("<br>Source:".$s);
echo("<br>Destination:".$d);
echo("<br>Departure Date:".$dd);
echo("<br>Departure Time:".$dt);
echo("<br>Charges:".$c);
?>