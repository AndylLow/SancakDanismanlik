<!DOCTYPE html>
<html>
<head>
	<title>danışan sayfası</title>
	<style type="text/css">
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
<button style="margin: 50px 50px">Geri Dön</button>
<h1 style="margin-left: 70%;margin-top: -50px"><strong>Sancak Danışmanlık</strong></h1>
<br><br><br>
<div style="margin-left: 150px">
isim:<input type="text" name="danısanismi" placeholder="Ahmet Çağrı Kılıç">
<br><br>
Telefon Numarası:<input type="text" name="telno" placeholder="+90 5555555555">
<div style="margin-left: 850px;">Ödenecek Ücret:<input type="text" name="odenecek" placeholder="200TL"></div></div>

<div></div><br><br><br>
<div style="margin-left: 400px">Notlar<br><input style="min-width: 500px;min-height: 200px;" type="text" name="ozelnot" placeholder="Danışan için notlar"></div>
<button style="margin: -150px 950px;" onclick="">Danışanı Kaldır</button>
<button style="margin-left: 600px">Kaydet</button>
</body>
</html>