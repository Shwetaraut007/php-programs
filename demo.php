<html>
   <body>
      <form method="get" action="Demo5.php">
        Enter no:
          <input type="text" name="t1" value="<?php echo($_GET['t1']);?> "> <br>
        Enter password:
          <input type="password" name="t2" value="<?php echo($_GET['t2']);?>"> <br>
       Gender:
          <input type="radio" name="r1" value="male"  <?php if($_GET['r1']=='male') echo('checked=checked');?>>Male
          <input type="radio" name="r1" value="female" <?php if($_GET['r1']=='female') echo('checked=checked');?>>FeMale
<br>       <input type="submit" value="ok">
      </form>
   </body>
</html>