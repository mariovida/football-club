<?php
	session_start();
	include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <title>Dodavanje vijesti - MNK Brod</title>
  <link rel="icon" href="../img/fav.png">
  <style>
  </style>
</head>
<body>
  <?php
    if(!isset($_SESSION['username'])) {
      header('Location: login.php');
    }
  ?>

  <section id="left-bar">
		<h2>MNK BROD</h2>
		<a href="index.php">Početna</a>
    <a href="unos.php">Dodavanje vijesti</a>
    <a href="register_user.php">Registracija korisnika</a>
		<a href="logout.php">Odjava</a>
	</section>
  
  <div class="unos">
    <?php
      include 'connect.php';
      if(isset($_SESSION['username'])) {
      echo '
      <form enctype="multipart/form-data" method="POST" action="skripta.php">
        <label for="naslov" required>Naslov vijesti:</label>
        <input name="naslov" id="naslov" type="text" class="naslov" required/>
        <span id="porukaTitle" class="bojaPoruke"></span>
        <br/><br/>

        <label for="sazetak">Kratki sadržaj vijesti (do 100 znakova):</label>
        <br/>
        <span id="porukaAbout" class="bojaPoruke"></span>
        <textarea name="sazetak" id="sazetak" type="text" class="sazetak" required></textarea>
        <br/><br/>

        <label for="tekst">Sadržaj vijesti:</label>
        <br/>
        <span id="porukaContent" class="bojaPoruke"></span>
        <textarea name="tekst" id="tekst" required></textarea>
        <br/><br/>

        <label for="slika">Slika</label>
        <br/>
        <input name="slika" id="slika" type="file" class="slika" required/>
        <span id="porukaSlika" class="bojaPoruke"></span>
        <br/>

        <input type="reset" class="button_no" value="Poništi" />
        <input name="submit" type="submit" class="button_yes" id="slanje" value="Pohrani" />
      </form>';
    }?>
  </div>

  <script src="../js/check.js"></script>
</body>
</html>
