<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
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
  content: "";
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
</head>
<body style="background-color: orange"><a href="yenikullanici.html" >
	<p style="float: right; ">Yeni Çalışan Ekle </a>|<a href="sancakdanışmanlık2.html"> Çıkış Yap</a></p><pre><h1> Sancak Danışmanlık</h1></pre>
	<br><br><br>
	
	<section >
  		<nav>
  			<select size="20">
  				<option selected="true">Ahmet Çağrı Kılıç                       </option>
  				<option>Danışan 2</option>
  				<option>Danışan 3</option>
  			</select>
  			
  		</nav>
  
  <nav><button>Sayfaya git</button><pre><br><br><br><br><br><br>									<pre style="font-size: 150%; color: gold;"><strong>              		 Ahmet Çağrı Kılıç
  			Ödenecek:    900TL
               		 +905555555555</strong></pre></pre></nav>
  
 </nav><nav></nav><nav></nav>
  <br><br><br><br><br><br><br>
  	<pre style="font-size: 150%; color: gold;"> <strong>Yeni Danışan Ekle</strong></pre>
  	<form>

		<div class="input-container">
    
    <input class="input-field" type="text" placeholder="ilkisim" name="ilkisim">
  </div>
  <br>
  <div class="input-container">
    
    <input class="input-field" type="text" placeholder="soyisim" name="soyisim">
  </div>
  <br>
  <div class="input-container">
    
    <input class="input-field" type="text" placeholder="telefon" name="telefon">
  </div>
		
		<br><pre>        <button type="submit" class="btn">Giriş</button></pre>
	</form>
	</section>
</body>
</html>