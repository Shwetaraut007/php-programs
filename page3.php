<?php
 session_start();
 $n=$_SESSION["name"];
  $add=$_SESSION["address"];
  $ph=$_SESSION["phone"];

 $pname=$_POST["t4"];
  $price=$_POST["t5"];
   $quty=$_POST["t6"];

echo("<br>Customer Name:".$n);
echo("<br>Customer Address:".$add);
echo("<br>Phone no:".$ph);
echo("<br>product Name:".$pname);
echo("<br>price:".$price);
echo("<br>Quantity:".$quty);
echo("<br>Total Bill:".$price*$quty);
?>