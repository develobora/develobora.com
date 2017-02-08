<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8" />
		<title>Patryk Obora - Junior Front End Developer</title>
		<link href="https://fonts.googleapis.com/css?family=Cutive+Mono&amp;subset=latin-ext" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<link href="css/fontello.css" rel="stylesheet" type="text/css" />
		<link href="css/animate.css" rel="stylesheet" type="text/css" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body id="sent">
	<div id="content">
		<div id="static-wrap">
			<section class="area main-page">
			<div class="shadow"></div>
				<div class="center">
					<div class="header-box">
						<span class="header-top">
						<?php 
							if (empty($errors)) {
								echo '<ul>';
									echo '<li style="opacity: 1; display: inherit; width: inherit; transform: inherit;">Wiadomość została wysłana. Dziękuję za kontakt!</li>';
									echo '</ul></ br>';		
									echo '<a href="index.php" ;return: false>Powrót do strony głównej.<a>';
								}
						?>
						</span>
					</div>
				</div>
			</section>
		</div>
	</div>
</body>
</html>