<?php
	session_start();
	include 'admin/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
	<meta http-equiv="content-language" content="hr-HR"/>
	<meta name="keywords" content=""/>
	<meta name="description" content=""/>
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="MNK Brod"/>
	<meta property="og:description" content=""/>
	<meta property="og:url" content=""/>
	<link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro|Rubik&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9f52e31018.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>MNK BROD</title>
	<link rel="shortcut icon" href="img/fav.png" />
</head>
<body>
    <button onclick="topFunction()" id="upButton" title="Go to top"><i class="fa-solid fa-angle-up"></i></button>
    <nav id="navigation">
		<div class="wrapper">
			<a href="index"><img src="img/logo.png"></a>
			<h1>MNK BROD<br/><span>Slavonski Brod</span></h1>
			<div class="social">
				<a href="https://www.facebook.com/mnkbrodofficial" target="_blank"><i class="fab fa-facebook-f"></i></a>
				<a href="https://www.instagram.com/mnk_brod/" target="_blank"><i class="fab fa-instagram"></i></a>
				<a href="https://www.youtube.com/channel/UC1vXEGLek1vnfkWH8DmfX8g" target="_blank"><i class="fab fa-youtube"></i></a>
			</div>
			<div class="droper">
				<button onclick="myFunction()" class="icon">
					<span></span>
					<span></span>
					<span></span>
				</button>
				<div id="myDropdown" class="droper-content">
					<a href="momcadi/momcadi.php">MOMČADI</a>
					<a href="#">NATJECANJA</a>
					<a href="#">O KLUBU</a>
				</div>
			</div>
			<ul>
				<li><a href="vijesti" class="link">VIJESTI</a></li>
				<div class="dropdown">
					<li><a href="momcadi.html" class="link dropbtn">MOMČADI</a></li>
					<div class="dropdown-content">
						<a href="momcadi/seniori.html">Seniori</a>
						<a href="momcadi/juniori.html">Juniori</a>
						<a href="momcadi/kadeti.html">Kadeti</a>
						<a href="momcadi/pioniri.html">Pioniri</a>
					</div>
				</div>
				<div class="dropdown">
					<li><a class="link">NATJECANJA</a></li>
					<div class="dropdown-content">
						<a href="index.html">II. HMNL Istok</a>
						<a href="index.html">II. HMNL Kup</a>
						<a href="index.html">HMNL Istok - Juniori</a>
						<a href="index.html">HMNL Istok - Kadeti</a>
					</div>
				</div>
				<div class="dropdown">
					<li><a class="link">O KLUBU</a></li>
					<div class="dropdown-content">
						<a href="povijest.html">Povijest kluba</a>
						<a href="kontakt.html">Kontakt</a>
					</div>
				</div>
			</ul>
		</div>
	</nav>

    <div class="main"><div class="animate__animated animate__slideInLeft main-img"></div>
        <div class="animate__animated animate__slideInRight main-game">
			<div class="last-game">
                <h2>POSLJEDNJA UTAKMICA</h2>
                <div class="club-logo"><img src="img/fav.png"/></div>
                <div class="game-info">
				    <p>MNK Brod  -  MNK Brod</p>
                    <pre>17.04.2022.</pre>
				    <pre>2    :    1</pre>
                </div>
                <div class="club-logo"><img src="img/fav.png"/></div>
			</div><hr/>
			<div class="next-game">
                <h2>SLJEDEĆA UTAKMICA</h2>
                <div class="club-logo"><img src="img/fav.png"/></div>
                <div class="game-info">
                    <p>MNK Brod  -  MNK Brod</p>
                    <pre>21.04.2022.</pre>
                    <pre>20:30</pre>
                </div>
                <div class="club-logo"><img src="img/fav.png"/></div>
			</div>
            <a href="#vijesti" class="cta">
                <span>VIJESTI</span>
                <svg viewBox="0 0 13 10" height="15px" width="15px">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                </svg>
            </a>
        </div>
    </div>

    <table class="score-table">
        <thead>
        <tr>
            <th>#</th>
            <th style="width:50%;text-align:left;padding-left:20px;">KLUB</th>
            <th>OU</th>
            <th>P</th>
            <th>N</th>
            <th>I</th>
            <th>B</th>
        </tr>
        </thead>
        <tbody>
            <?php
		    $query = "SELECT * FROM tablica ORDER BY B DESC";
			$result = mysqli_query($dbc, $query);
            $counter = 1;
			while($row = mysqli_fetch_array($result)) {
				echo "<tr><td>$counter</td>
                <td style='text-align:left;padding-left:20px'>".$row['klub']."</td>
                <td>".$row['OU']."</td>
                <td>".$row['P']."</td>
                <td>".$row['N']."</td>
                <td>".$row['I']."</td>
                <td><b>".$row['B']."</b></td></tr>";
                $counter++;
		    }?>
        <tbody>
    </table>

    <div id="vijesti" class="vijesti">
        <h1>VIJESTI</h1>
        <div class="js-scroll fade-in-bottom content">
        <?php
            define('UPLPATH', 'img/');
		    $query = "SELECT * FROM vijesti ORDER BY id DESC LIMIT 6";
			$result = mysqli_query($dbc, $query);
			while($row = mysqli_fetch_array($result)) {
				echo "<article>
					<div class='news'>
                    <div class='news_image'><img src='" .UPLPATH.$row['slika']. "'></div>
					<h4><a href='clanak.php?id=".$row['id']."'>".$row['naslov']."</a></h4>
					<div class='cut-text'>".$row['sazetak']."</div>
					</div>
					</article>";
			}?>
        </div>
    </div>

    <footer>
		<div class="footer-social">
			<a href="https://www.facebook.com/mnkbrodofficial" target="_blank"><i class="fab fa-facebook-f first"></i></a>
			<a href="https://www.instagram.com/mnk_brod/" target="_blank"><i class="fab fa-instagram"></i></a>
			<a href="https://www.youtube.com/channel/UC1vXEGLek1vnfkWH8DmfX8g" target="_blank"><i class="fab fa-youtube last"></i></a>
		</div>
		<p>Built by <b>MV</b></p>
	</footer>

    <script src="js/slide.js"></script>
</body>
</html>