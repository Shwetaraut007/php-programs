<?php
    session_start();
     $name=$_SESSION["name"];
    $eadd=$_SESSION["eaddress"];
    $sadd=$_SESSION["shipping address"];
    $mp=$_SESSION["modepayment"];

     $price=$_POST["t5"];
     $q=$_POST["t6"];
     
     echo("<h2><font color='orange' face='Cambria' >CUSTOMER INFO..</h2>");
     echo("<h4><br>Name:".$name);
     echo("<br>email Address:".$eadd);
     echo("<br>shipping address:".$sadd);
     echo("<br>modepayment:".$mp);
    echo("<h2> PURCHASE DETAILS:</h2>");
    echo("<br>price:".$price);
    echo("<br>Quantity:".$q);
    echo("<br>Total Bill:".$price*$q);
?>