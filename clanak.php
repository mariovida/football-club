<?php
	session_start();
	include 'admin/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image/ico" href="img/favicon.ico"/>
	<title>
		<?php
			$id = $_GET['id'];
			$query = "SELECT naslov FROM vijesti WHERE id=$id";
			$result = mysqli_query($dbc, $query);
			while($row = mysqli_fetch_array($result)) {
				echo $row['naslov'];
			}
		?>
	</title>
	<style>
		.main {
			height: 1400px;
		}
		article {
		  margin-top: 30px;
		  background-color: white;
		  width: 100%;
		  height: auto;
		  padding-bottom: 30px;
		}
		article:hover {
		  background-color: white;
		}
	</style>
</head>
<body>
  <div class="main">
    <div class="wrapper">
      <?php

        $id = $_GET['id'];
        if ($dbc) {
          $query = "SELECT * FROM vijesti WHERE id=$id";
          $result = mysqli_query($dbc, $query);
          while($row = mysqli_fetch_array($result)) {
            echo "
              <article>
              <h2>".$row['naslov']."</h2>
              <p class='datetime'>Objavljeno ".$row['datum']." u ".$row['vrijeme']."</p>
              <img class='clanak_image' src='img/".$row['slika']."'/>
              <p class='sazetak'>".$row['sazetak']."</p>
              <p class='tekst'>".$row['tekst']."</p>
              </article>";
          }
        }
      ?>
    </div>
  </div>
</body>
</html>
