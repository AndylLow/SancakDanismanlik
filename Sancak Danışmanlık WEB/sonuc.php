<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif; background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(b2.jpg) ;
background-size: cover;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

</style>
	<title> <?php if($_POST["action"]=="destroy") echo "Danışanı Sil"; else if($_POST["action"]=="add") echo "Danışan ekle"; else if($_POST["action"]=="update") echo "Danışan Güncellemesi"; ?></title>
</head>
<body>
<?php

	$link=mysqli_connect('localhost','root','');
    mysqli_select_db($link,'mydb');
    

	if($_POST["action"]=="destroy") {
		  $selected=$_POST["target"];
          mysqli_query($link,"delete FROM danisanlar where ID='$selected'");
	}
	if($_POST["action"]=="add"){
		mysqli_query($link,"Insert into danisanlar (isim,soyisim,numara) values('".$_POST["isim"]."','".$_POST["soyisim"]."','".$_POST["numara"]."')");
	}
	if($_POST["action"]=="uppdate"){
		$selected=$_POST["target"];

		if($_POST["privilige"]>0)
			mysqli_query($link,"Update danisanlar SET isim='".$_POST["isim"]."',soyisim='".$_POST["soyisim"]."',numara='".$_POST["numara"]."',ucret='".$_POST["ucret"]."',notlar='".$_POST["notlar"]."' where ID='$selected'; ");
		else 
			mysqli_query($link,"Update danisanlar SET isim='".$_POST["isim"]."',soyisim='".$_POST["soyisim"]."',numara='".$_POST["numara"]."',ucret='".$_POST["ucret"]."' where ID='$selected'; ");
	}

	echo "
	<form action=sancakdanısmanlık3.php method='post' style='max-width:500px;margin:auto'>
		<button type='submit' class='btn' >Geri Dön</button>
		<input type='text' name='username' hidden value='".$_POST["username"]."'>
		<input type='text' name='password' hidden value='".$_POST["password"]."'>
	</form>
	";
?>
</body>
</html>