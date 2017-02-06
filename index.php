<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8" />
		<title>Patryk Obora - Junior Front End Developer</title>
		<link href="https://fonts.googleapis.com/css?family=Rajdhani:400,500,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700&amp;subset=latin-ext" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Cutive+Mono&amp;subset=latin-ext" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<link href="css/fontello.css" rel="stylesheet" type="text/css" />
		<link href="css/animate.css" rel="stylesheet" type="text/css" />
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>

	<!--************************[ nav bar ]************************-->
	<nav class="alignCenter">
		<!--[ logo ]-->	
		<div class="logo-container">
			<a class="logo" href="index.php">develobora.com</a>
		</div>
		<!--[ nav list ]-->
		<a class="mobile-menu" href="#mobile" onClick="Tmpl.mobileMenu(); return false"><span></span></a>	
			<a href="#" class="menu main-nav active">Strona główna</a>
			<a class="menu about-nav" href="#about-me">O mnie</a>
			<a class="menu skills-nav" href="#skills">Umiejętności</a>
			<a class="menu portfolio-nav" href="#portfolio">Portfolio</a>
			<a class="menu contact-nav" href="#contact">Kontakt</a>
			<div class="fb">
			<a class="fb" target="_blank" href="https://www.facebook.com/develobora/">
				<i class="icon-facebook"></i>
			</a>
		</div>	
	</nav>
	<!--************************[ Main Page ]************************-->
	<div id="content">
		<div id="static-wrap">
			<section class="area main-page">
			<div class="shadow"></div>
				<div class="center top">
					<div class="header-box alignCenter">
						<img class="photo" src="images/free_logo_9.png" alt="Patryk Obora - Junior Front-End Developer">
						<span class="header-top typed"></span>
					</div>
					<a href="#" class="arrow"></a>
				</div>
			</section>
	<!--************************[ About Me ]************************-->
			<section id="about-me" class="area sect-nav alignCenter">O mnie</section>
			<section class="area about-me">
				<div class="shadow"></div>
					<div class="center">	
						<div class="text-area">
							<p>Mam 23 lata. Technologią cyfrową interesuję się od dziecka. W szkole średniej ukończyłem podstawowe kursy z html/css. Na poważnie front-end'em zajmuję się od połowy 2016 roku. Przygodę rozpocząłem od nauki C++, aby zrozumieć logikę i nauczyć się myśleć jak programista. Moim głównym celem jednak od początku było tworzenie stron www. Zaraz po tym, przy pomocy wielu kursów internetowych solidnie przepracowałem podstawowe zagadnienia HTML5/CSS3/JavaScript. Idąc za ciosem, w listopadzie 2016 roku, ukończyłem zajęcia z zakresu Front-End (z elementami Back-Endu) w Centrum Szkoleń Informatycznych Vedius w Krakowie. Tam poznałem praktyczne użycie komend i funkcji, oraz nauczyłem się rozwiązywać pierwsze problemy napotkane na drodze tworzenia witryn.</p>

							<p>Od tego czasu staram się codziennie wzbogacać swoją wiedzę i stosować ją w praktyce. Branża, jak i chęć samodoskonalenia wciągnęły mnie tak mocno, że postanowiłem poprowadzić swoją ścieżkę zawodową właśnie w tym kierunku. W związku z powyższym, aktualnie szukam możliwości współpracy z doświadczonymi developerami, dzięki której mógłbym się doskonalić, poczuć presję pracy nad projektem dla klienta, oraz zdobyć cenne doświadczenie. Najlepszym rozwiązaniem wydaje się staż, aczkolwiek jestem otwarty na inne propozycje. Liczę na udaną i owocną współpracę dla obu stron. </p>

							<p>Na zakończenie dodam, że jestem osobą opanowaną, sumienną i lojalną. Nie mam problemu z nawiązywaniem kontaktów, stąd praca w grupie nie będzie problemem. Nie boję się wyzwań. Bardzo szanuję uczciwość i uwielbiam świeżą, poranną kawę! :) </p>
						</div>
					</div>
			</section>
	<!--************************[ Skills ]************************-->				
			<section id="skills" class="area sect-nav alignCenter">Umiejętności</section>
			<section class="area skills">
				<div class="shadow"></div>
					<div class="center">
						<div class="text-area skill alignCenter">						
						<p>Technologie, z których korzystam:</p>
						<ul>
							<li>
								<img src="images/html.png">
								<span>HTML5</span>
							</li>
							<li>
								<img class="css" src="images/css.png">
								<span>CSS3</span>
							</li>
							<li>
								<img src="images/ps.png">
								<span>Adobe Photoshop</span>
							</li>
							<li>
								<img src="images/jsw.png">
							<span>JavaScript (jQuery)</span>
							</li>
							<li>
								<img src="images/rwdfix.png">
								<span>Responsive Web Design</span>
							</li>
							<li>
								<img src="images/psd-html.png">
								<span>PSD to HTML</span>
							</li>
						</ul>
						<p>Technologie, które nie są mi obce:</p>
						<ul>
							<li class="know-sth">
								<img src="images/sass.png">
								<span>Sass</span>
							</li>
							<li class="know-sth">
								<img src="images/joomla.png">
								<span>Joomla!</span>
							</li>
							<li class="know-sth">
								<img src="images/wp.png">
								<span>WordPress</span>
							</li>
							<li class="know-sth">
								<img src="images/php.png">
								<span>PHP</span>
							</li>
						</ul>
						</div>
					</div>
			</section>
	<!--************************[ Portfolio ]************************-->				
			<section id="portfolio" class="area sect-nav alignCenter">Portfolio</section>
			<section class="area portfolio">
				<div class="shadow"></div>
					<div class="center">
						<div class="page-middle">
							<div class="page left">
								<a href="../projekt3-furyroom/" target="_blank">
								<div class="image1"></div>
									<span class="check alignCenter">Sprawdź
									<p class="description alignCenter">Projekt wizytówki typu landing-page, wykonany w celu praktyki na zlecenie Agencji E-Start.com.pl i jest jej własnością. Wszelkie prawa do logotypu, szablonu jak i grafik zastrzeżone. Kopiowanie zabronione. </br>Konwersja PSD do HTML/CSS z użyciem JavaScriptu i bibliotek jQuery.</p></span>
								</a>
							</div>
							<div class="page right">
								<a href="../strona-www/" target="_blank">
									<div class="image2"></div>
									<span class="check second alignCenter">Sprawdź <p class="description alignCenter">Pierwszy, własny projekt frontu strony agencji interaktywnej. Wykonany przy użyciu czystego kodu HTML5, CSS3, oraz JavaScript z biblioteką jQuery. Strona w pełni responsywna.</p></span>
								</a>
							</div>
						</div>
					</div>
			</section>
	<!--************************[ Contact ]************************-->				
			<section id="contact" class="area sect-nav alignCenter">Kontakt</section>
			<section class="area contact">
				<div class="shadow"></div>
					<div class="center">
						<div class="page-middle">
							<form action="kontakt.php" method="POST">
								 <div class="contact-box">
									 <div class="left">
									 	<a href="tel:+48 886 103 856" class="icon phone">+48 886 103 856</a>
									 	<a href="mailto:oborapatryk@gmail.com" class="icon mail">oborapatryk@gmail.com</a>
									 </div>
									 <div class="right">
									 	<div class="left social">
									 	<a target="_blank" href="https://www.facebook.com/develobora/"><div class="icon facebook"></div></a>
									 	</div>
									 		<div class="right social">
									 	<a target="_blank" href="https://github.com/develobora"><div class="icon github"></div></a>
									 	</div>
									 </div>
								 </div>
								<div class="left">
									<div class="text">
										<p>Zapraszam do kontaktu również poprzez formularz.</p>
										<span>Postaram się odpowiedzieć tak szybko, jak to możliwe.</span>
									</div>
									<div class="row">
										<input type="text" name="name" placeholder="Imię, nazwisko*" <?php if (isset($_POST['name']) === true) { echo 'value="', strip_tags($_POST['name']), '"'; } ?> />
									</div>
									<div class="row parentRow">
										<input type="number" class="left" name="phone" placeholder="Telefon" />
										<input type="email" class="right" name="email" placeholder="E-mail *" <?php if (isset($_POST['email']) === true) { echo 'value="', strip_tags($_POST['email']), '"'; } ?>/>
									</div> 
								</div>
								<div class="right">
									<textarea placeholder="Treść wiadomośi *" name="message"><?php if (isset($_POST['name']) === true) { echo strip_tags($_POST['name']); } ?></textarea>
									<div class="submitElement alignRight">
										<p class="info">( <span>*</span> ) - Pola oznaczone gwiazdką są wymagane</p>
										<button type="submit" name="send-button">Wyślij</button>
									</div>
								</div>
							</form>
						</div>
					</div>
			</section>
				<footer class="area sect-nav alignCenter">
				<div class="center">
					<div class="left">
						<span>© 2017</span>
						<a class="logo" href="index.php">develobora.com</a>
						<span>Patryk Obora - Portfolio</span>
					</div>
					<div class="right">
						<span>Icons by <a href="http://www.flaticon.com" title="Flaticon">Flaticon</a><a href="http://icons8.com" title="Icons8">Icons8</a></span>
					</div>
				</div>
				</footer>
		</div>
	</div>

<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/function.js"></script>
<script type="text/javascript" src="js/typed.min.js"></script>
<script text="text/javascript">
	Tmpl.typing();
</script>
</body>
</html>
