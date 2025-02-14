<?php
   session_start();
   $s=$_SESSION["style"];
    $size=$_SESSION["siz"];
    $c=$_SESSION["color"];
    $b=$_SESSION["bg"];
    $n=$_SESSION["name"];

    echo("<h1>welcome</h1>");
    echo("<body bgcolor='$b'><font face='$s' size='$size' color='$c'></h1></font></body>");
?>