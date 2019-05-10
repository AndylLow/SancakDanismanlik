<?php

	$danisanID=$_POST["danisanID"];
	$link=mysqli_connect('localhost','root','');
    mysqli_select_db($link,'mydb');
    $rs=mysqli_query($link,"SELECT * FROM danisanlar where ID='$danisanID' ");
    $result=mysqli_fetch_array($rs);
    $bir=$result['isim']." ".$result['soyisim'];
    $fiyatı=$result["ucret"];
    $numarası=$result["numara"];
    echo "<strong>              		 ".$bir."
  			Ödenecek:    ".$fiyatı."TL
               		  ".$numarası."</strong>";
?>