<?php
    session_start();
     $name=$_SESSION["name"];
    $add=$_SESSION["address"];
    $bir=$_SESSION["birth"];
    $ph=$_SESSION["phone"];

     $mn=$_POST["t5"];
     $hf=$_POST["t6"];
     $ci=$_POST["t7"];
 
     echo("<h4>PATIENT INFO..");
     echo("<br>Name:".$name);
     echo("<br>Address:".$add);
     echo("<br>Birthdate:".$bir);
     echo("<br>Mobile No:".$ph);
    echo("<h4> HEALTH DETAILS:");
    echo("<br>Medicare No:".$mn);
    echo("<br>Health Fund:".$hf);
    echo("<br>Cirical Info:".$ci);
?>