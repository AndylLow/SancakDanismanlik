<!DOCTYPE html>
<html>
<head>
	<?php
		  $link=mysqli_connect('localhost','root','');
          mysqli_select_db($link,'mydb');
          $val=$_POST["privilige"];
          $selected=$_POST["selection"];
          $rs=mysqli_query($link,"SELECT * FROM danisanlar where ID='$selected'");
          $rs=mysqli_fetch_array($rs);
     echo "
	<meta charset='utf-8'>
	<title>".$rs["isim"]." ".$rs["soyisim"]."</title>
	<style type='text/css'>
		input{
			border-style: solid;
			border-width: 3px;
			border-color: black;
		}
		button{
			background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.9;
		}

	div,h1{
		color: gold;
	}
	body{
		background-size: cover;
  background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(b2.jpg) ;
	}
	</style>

</head>
<body>
";


echo "
<form action='sancakdanısmanlık3.php' method='post'>
<button type='submit' style='margin: 50px 50px'>Geri Dön</button>
<input type='text' name='username' hidden value='".$_POST["username"]."'>
<input type='text' name='password' hidden value='".$_POST["password"]."'>
</form>

<h1 style='margin-left: 70%;margin-top: -50px'><strong>Sancak Danışmanlık</strong></h1>
<br><br><br>
<div style='margin-left: 150px'>

<form action='sonuc.php' method='post'>
isim:<input type='text' name='isim' value='".$rs["isim"]."'>
soyisim:<input type='text' name='soyisim' value='".$rs["soyisim"]."'>
<br><br>
Telefon Numarası:<input type='text' name='numara' value='".$rs["numara"]."'>
<div style='margin-left: 850px;'>Ödenecek Ücret(TL):<input type='text' name='ucret' value='".$rs["ucret"]."'></div></div>

<div></div><br><br><br>";

if($val>0) echo "
<div style='margin-left: 400px'>Notlar<br><input style='min-width: 500px;min-height: 200px;' type='text' name='notlar' value='".$rs["notlar"]."'></div>

";
else
echo "
<div style='margin-left: 400px'>Notlar<br><input style='min-width: 500px;min-height: 200px;' type='text' disabled name='notlar' value='"."Görüntüleme yetkiniz yok"."'></div>";



echo "
	
		<button style='margin-left: 600px'>Kaydet</button>
		<input type='text' name='action' hidden value='uppdate'>
		<input type='text' name='privilige' hidden value='$val'>
		<input type='text' name='target' hidden value='".$rs["ID"]."'>
		<input type='text' name='username' hidden value='".$_POST["username"]."'>
		<input type='text' name='password' hidden value='".$_POST["password"]."'>
	</form>";

echo "
<form action='sonuc.php' method='post'>
	<button type='submit' style='margin: -150px 950px;' >Danışanı Kaldır</button>
	<input type='text' name='action' hidden value='destroy'>
	<input type='text' name='target' hidden value='".$rs["ID"]."'>
	<input type='text' name='username' hidden value='".$_POST["username"]."'>
	<input type='text' name='password' hidden value='".$_POST["password"]."'>
</form>";
?>

</body>
</html>