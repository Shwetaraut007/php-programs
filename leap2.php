<html>
    <form method="post"action="#">
        enter year:
        <input type="text"name="t1"><br>
        <input type="submit"value="ok">
    </form>
</html>
<?php
       $y=2024;
        if($y%4==0)
            echo("leap year");
        else
            echo("not leap year");
?>