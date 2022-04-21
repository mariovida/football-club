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
    <title>Admin - MNK Brod</title>
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
</body>
</html>
