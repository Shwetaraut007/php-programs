3>ASS6Q4ii.php
<?php
     session_start();
     $sno=$_SESSION["sno"];
     $name=$_SESSION["name"];
     $c=$_SESSION["class"];
     $sub1=$_post["t1"];
     $sub2=$_post["t2"];
     $sub3=$_post["t3"];
     $sub4=$_post["t4"];
   echo("<h4>SUBJECT INFO..")
      echo("<br>seat no=".$sno);
      echo("<br>name=".$name);
      echo("<br>class=".$c);
   echo("<h4>SUBJECT MARKS..");
      echo("<br>PHP=".$sub1);
      echo("<br>DSA=".$sub2);
      echo("<br>JAVA=".$sub3);
      echo("<br>CPP=".$sub4);
  echo("<br>total marks=".$sub1+$sub2+$sub3+$sub4);
?>