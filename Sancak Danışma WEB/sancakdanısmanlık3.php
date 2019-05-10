<!DOCTYPE html>
<html>
<head>
	<title>Sancak Danışmanlık</title>
  <meta charset="utf-8">
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
	<script type='text/javascript'>
				function loadDoc() {
				  iste=document.getElementById('selectionn').value;
				  var xhttp = new XMLHttpRequest();
				  xhttp.onreadystatechange = function() {
				    if (this.readyState == 4 && this.status == 200) {
				      document.getElementById('demo').innerHTML = this.responseText;
				    }
				  };
				  xhttp.open('POST', 'istek.php', true);
				  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				  xhttp.send("danisanID="+iste);																									
				  
				}
	</script>
		
	}

</head>
<body style='background-color: orange'>
	
  <?php

  $link=mysqli_connect('localhost','root','');
  mysqli_select_db($link,'mydb');
  $val=$_POST["username"];
  $rs=mysqli_query($link,"SELECT * FROM users where username='$val'");
  $rs=mysqli_fetch_array($rs);
  $return=$rs["privilige"];
  if($rs["password"]==$_POST["password"]){
     if($return>1)
	  echo "
	  <a href='yenikullanici.php' >
		<p style='float: right; '>Yeni Çalışan Ekle </a>|<a href='index.php'> Çıkış Yap</a></p><pre><h1> Sancak Danışmanlık</h1></pre>
		<br><br><br>
		"; 
	  else echo "<p style='float: right; '><a href='index.php'> Çıkış Yap</a></p><pre><h1> Sancak Danışmanlık</h1></pre>
  		<br><br><br>";


    echo "
	<section ><form action='danisan1.php' method='post'>
  		<nav>
  			<select name='selection' id='selectionn' onchange='loadDoc()' size='20'>
          ";
          
          $link=mysqli_connect('localhost','root','');
          mysqli_select_db($link,'mydb');
          $rs=mysqli_query($link,"SELECT * FROM danisanlar");
          echo "<option selected='true' name ='";
          $result=mysqli_fetch_array($rs);
          $bir=$result['isim']." ".$result['soyisim'];
          $fiyatı=$result["ucret"];
          $numarası=$result["numara"];
          echo $result["ID"]."' value='".$result["ID"];
          echo "'>";
          echo "$bir";
          echo "</option>";
          while($result=mysqli_fetch_array($rs)){
  				 echo "<option name='".$result["ID"]."' value='".$result["ID"]."'>".$result["isim"]." ".$result["soyisim"]."</option>";
  				}
         echo "<input type='number' name='privilige' hidden value='".$return."'>";
         echo "<input type='text' name='username' hidden value='".$val."'>";
         echo "<input type='text' name='password' hidden value='".$_POST["password"]."'>";
          echo "
  			</select>
  			
  		</nav>
  
  <nav><button type='submit'>Sayfaya git</button></form><br><br><br><br><br><br><pre id='demo' style='font-size: 150%; color: gold;'><strong>              		 ".$bir."
  			Ödenecek:    ".$fiyatı."TL
               		  ".$numarası."</strong></pre></nav>
  
 <nav></nav><nav></nav>
  <br><br><br><br><br><br><br>
  	<pre style='font-size: 150%; color: gold;'> <strong>Yeni Danışan Ekle</strong></pre>
  	<form action='sonuc.php' method='post'>

		<div class='input-container'>
    
    <input class='input-field' type='text' placeholder='ilkisim' name='isim'>
  </div>
  <br>
  <div class='input-container'>
    
    <input class='input-field' type='text' placeholder='soyisim' name='soyisim'>
  </div>
  <br>
  <div class='input-container'>
    
    <input class='input-field' type='text' placeholder='telefon' name='numara'>
  </div>
		
		<br><pre>        <button type='submit' class='btn'>Giriş</button></pre>
    <input type='text' name='action' hidden value='add'>

	</form>
	</section>";}
 else
  echo "<h1> BİLGİLER YANLIŞ </h1>"
?>
</body>
</html>