<html>
   <body>
     <form method="post" action="multi.php">
         Enter name:
           <input type="text"  name="t1" ><br>
       select cities name you would  to visit:
        <select name="s1[]" mutilpe>
          <option> JAVA</option>
         <option>CPP</option>
         <option>Advance PHP</option>
          <option> DBMS</option>
      </select>     <br>
       <input type="submit" value="ok"> 
   </form>
  </body>
</html>
<?php 
   $s=$_POST["t1"];
   $a=$_POST["s1"];
    echo("<br> Name=".$s);
     foreach($a as $f)
       {
           echo("<br>".$f);
      }    
?>
  
