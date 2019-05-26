<?php
   $link=mysqli_connect('localhost','root','');
   mysqli_select_db($link,'mydb');
   $rs=mysqli_query($link,"SELECT * FROM events");
   $outp=$rs->fetch_all(MYSQLI_ASSOC);
   echo json_encode($outp);
?>