<html>
   <form action="page93.php">
 <?php
 session_start();
 $s=$_POST["t1"];
 $size=$_POST["t2"];
 $c=$_POST["t3"];
 $b=$_POST["t4"];
 $n=$_POST["t5"];
 $_SESSION["style"]=$s;
 $_SESSION["siz"]=$size; 
 $_SESSION["color"]=$c;
 $_SESSION["bg"]=$b;
 $_SESSION["name"]=$n;

 echo("<br>font style=".$s);
 echo("<br>font size=".$size);
 echo("<br>font color=".$c);
 echo("<br>font background=".$b);
 echo("<br>font name=".$n);

?>
<input type="submit"value="check">
</form>
</html>