
<!DOCTYPE html>
<html>
	<head>
		<?php
			$title = "Agribusiness and Marketing/Farm Management Branch"
		?>
		<meta charset="utf-8">
		<title><?php echo $title ?></title>
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body>
		<header>
			<div>
				<img  class="logo" src="img/logo.png">
				<div class="btns">
					<button class="btn"><a href=""">Home</a></button>
					<button class="btn"><a href="about.html">About</a></button>
					<button class="btn"><a href="contact (1).html">Contact Us</a></button>
				</div>
				<form method="POST" class="search">
					<input id="search" type="text" name="search" placeholder="Search">
					<input id="sub" class="btn" type="submit" name="submit" value="Submit ">
				</form>
			</div>
		</header>
		<main class="notice">
			<h3 class="ministry"> MINISTRY OF LANDS, AGRICULTURE AND RURAL SETTLEMENT<br>DEPARTMENT OF AGRICULTURAL TECHNICAL AND EXTENSION (AGRITEX)<br>AGRIBUSINESS AND MARKETING /FARM MANAGEMENT BRANCH</h3>
			<img id="background" src="img/greenfield.jpg">
			<h1>Notices and upcoming events</h1>
			<?php
			$events = array('Trade Fair(ZITF),','Zimbabwe Agricultural Show(Z.A.S),','Farmers Market Show' );
			echo implode(" \n ", $events);
			?>



			
		</main>
		<hr>
		<footer class="copyright">
			 <div id="footer_copyright">Copyright © Agribusiness and Marketing/Farm Management. All rights reserved</div>
		</footer>
	</body>
</html>
