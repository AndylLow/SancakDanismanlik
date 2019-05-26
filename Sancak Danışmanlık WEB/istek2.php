<?php
	$date=$_POST["date"];
	$ID=$_POST["ID"];
	$link=mysqli_connect('localhost','root','');
    mysqli_select_db($link,'mydb');
    echo ("update events set date='".$date."' where ID='".$ID."';");
    mysqli_query($link,"update events set date='".$date."' where ID='".$ID."';");
?>