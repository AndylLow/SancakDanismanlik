<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/icon?family=Material+Icons'
      rel='stylesheet'>
	<style>
* {
  box-sizing: border-box;
}

body {
  background-size: cover;
  background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(b2.jpg) ;
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 20%;
  height: 600px;
  padding: 20px;

}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}



/* Clear floats after the columns */
section:after {
  content: ';
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
option{
	padding:0px 75px;
	color: black;
}
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

input{
	size: 150%;
	font-size: 125%;
	background-color: white;
	color: black;
}
select{
	background-color: white;
	color: gold;
}
h1{
	font-size: 500%;
	color: gold;
}
i {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}
</style>
	<meta charset="utf-8">
	<title>Yeni Kullanıcı</title>
</head>
<body>
	<?php

	  $link=mysqli_connect('localhost','root','');
	  mysqli_select_db($link,'mydb');
	  
	  if($_POST["sifre"]==$_POST["sifretekrar"]){

		  if($_POST["selection"]==0)
		  	mysqli_query($link,"Insert into users (username,password,privilige) values ('".$_POST["giris"]."','".$_POST["sifre"]."','0')");
		  if($_POST["selection"]==1)
		  	mysqli_query($link,"Insert into users (username,password,privilige) values ('".$_POST["giris"]."','".$_POST["sifre"]."','1')");

		  echo " <form action=index.php method='post' style='max-width:500px;margin:auto'>
			<button type='submit' class='btn' >Geri Dön</button>
			</form>";
		}
	   else
	   		echo "<h1> Şifreler eşleşmiyor </h1> <form action=index.php method='post' style='max-width:500px;margin:auto'>
			<button type='submit' class='btn' >Geri Dön</button>
			</form>";	
	?>
</body>
</html>