<?php
 session_start();
 $sno=$_SESSION["setno"];
  $n=$_SESSION["name"];
  $c=$_SESSION["class"];

 $sub1=$_POST["t4"];
 $sub2=$_POST["t5"];
 $sub3=$_POST["t6"];
 $sub4=$_POST["t7"];

   echo("<h4>SUBDENT INFO..");
  echo("<br>Seat No:".$sno);
echo("<br>Name:".$n);
echo("<br>Class:".$c);
  echo("<h4> SUBJECT MARKS:");
echo("<br>subject :".$sub1);
echo("<br>subject :".$sub2);
echo("<br>subject :".$sub3);
echo("<br>subject :".$sub4);

 echo("<br>total =".$sub1+$sub2+$sub3+$sub4);


?>