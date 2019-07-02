<?php
    
    $danisanID=$_POST["Title"];
	$link=mysqli_connect('localhost','root','');
    mysqli_select_db($link,'mydb');
    $rs=mysqli_query($link,"SELECT * FROM danisanlar where ID='$danisanID' ");
    $result=mysqli_fetch_array($rs);
    $bir=$result['isim']." ".$result['soyisim'];


    $gecici=mysqli_fetch_array(
        mysqli_query($link,"Select MAX(ID) FROM events "));
    $gecici=$gecici[0]+1;

    
    $Title=$bir;
	$date=$_POST["date"];
	$link=mysqli_connect('localhost','root','');
    mysqli_select_db($link,'mydb');
    mysqli_query($link,"insert into events values('".$gecici."','".$Title."','".$date."');");
    





?>