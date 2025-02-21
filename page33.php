<?php
  session_start();
   $fn=$_SESSION["font_style"];
   $fs=$_SESSION["font_size"];
   $fc=$_SESSION["font_color"];
   $bc=$_SESSION["background_color"];

  echo("<br> WELCOME TO CDJ");
  echo("<font size=$fs color=$fc face=$fn>");
  echo("<body bgcolor=$bc>");
?>