<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>yeni kullanıcı ekle</title>
	<style type="text/css">
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
		h1{
			margin-left: 40%
		}
		body{
			background-size: cover;
  background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(b2.jpg) ;
		}
	</style>
</head>
<body>
<button style="margin: 50px 50px">Geri Dön</button>
<h1>KULLANICI EKLE</h1>
<br><div align="center">
<form action="sonuc2.php" method="post">
	kullanıcı girişi:<input type="text" name="giris"><br><br>
	kullanıcı şifresi:<input type="password" name="sifre"><br><br>
	kullanıcı şifresi(tekrar):<input type="password" name="sifretekrar"><br><br>
	Telefon numarası:<input type="text" name="tel no"><br><br>
	<select name="selection">
		<option selected="true" value="0">Sekreter</option>
		<option value="1">Danışman</option>
	</select><br><br>
	<button>Kaydet</button>
</form>
</div>
</body>
</html>