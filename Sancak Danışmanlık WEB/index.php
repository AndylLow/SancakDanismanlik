<!DOCTYPE html>
<html>
<head>
  <title>Sancak Danışmanlık</title>
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
</head>
<body>
<br><br><br><br><br><br><br><br><br><br>

<form action='sancakdanısmanlık3.php' method="post" style='max-width:500px;margin:auto'>
  <h2 style='color: gold;'>Sancak Danışmanlık Giriş</h2>

  <div class='input-container'>
    <i class='fa fa-envelope icon'></i>
    <input class='input-field' type='text' placeholder='Kullanıcı Adı' name="username">
  </div>
  
  <div class='input-container'>
    <i class='fa fa-key icon'></i>
    <input class='input-field' type='password' placeholder='Şifre' name="password">
  </div>

  <button type='submit' class='btn'>Giriş</button>
</form>
</body>
</html>
