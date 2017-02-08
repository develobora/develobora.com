<?php

if (empty($_POST) === false) {
	$errors = array();


/*
 Funkcja do usuwania polskich znakow z tekstu o dowolnym kodowaniu
 Autor: Marius Ma\ximus
 Inspiracja:  http://4programmers.net/PHP/FAQ/Jak_zmieni%C4%87_kodowanie_tekstu_nie_maj%C4%85c_dost%C4%99pu_do_funkcji_iconv_%5C

 Sposob uzycia:
 $zmienna = _no_pl("jakiś tekst z PL-znakami np. ŻÓŁĆ");
*/
function _no_pl($tekst)
{
  $tabela = Array(
  //WIN
"\xb9" => "a", "\xa5" => "A", "\xe6" => "c", "\xc6" => "C",
"\xea" => "e", "\xca" => "E", "\xb3" => "l", "\xa3" => "L",
"\xf3" => "o", "\xd3" => "O", "\x9c" => "s", "\x8c" => "S",
"\x9f" => "z", "\xaf" => "Z", "\xbf" => "z", "\xac" => "Z",
"\xf1" => "n", "\xd1" => "N",
  //UTF
"\xc4\x85" => "a", "\xc4\x84" => "A", "\xc4\x87" => "c", "\xc4\x86" => "C",
"\xc4\x99" => "e", "\xc4\x98" => "E", "\xc5\x82" => "l", "\xc5\x81" => "L",
"\xc3\xb3" => "o", "\xc3\x93" => "O", "\xc5\x9b" => "s", "\xc5\x9a" => "S",
"\xc5\xbc" => "z", "\xc5\xbb" => "Z", "\xc5\xba" => "z", "\xc5\xb9" => "Z",
"\xc5\x84" => "n", "\xc5\x83" => "N",
  //ISO
"\xb1" => "a", "\xa1" => "A", "\xe6" => "c", "\xc6" => "C",
"\xea" => "e", "\xca" => "E", "\xb3" => "l", "\xa3" => "L",
"\xf3" => "o", "\xd3" => "O", "\xb6" => "s", "\xa6" => "S",
"\xbc" => "z", "\xac" => "Z", "\xbf" => "z", "\xaf" => "Z",
"\xf1" => "n", "\xd1" => "N");

  return strtr($tekst,$tabela);
}

	//$name 		= $_POST['name'];
	$name 		= _no_pl($_POST['name']);
	$email 		= $_POST['email'];
	$phone 		= $_POST['phone'];
	$message 	= $_POST['message'];

	if (empty($name) === true || empty($email) === true || empty($message) === true) {
		$errors[] = 'Imię, email i wiadomość są wymagane!';
	} else {
		if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			$errors[] = 'To nie jest prawidłowy adres email!';
		}
		if (ctype_alpha(str_replace(' ', '', $name)) === false) {
			$errors[] = 'Nazwa musi posiadać tylko litery!';
		}
	}
}

if (empty($errors) === true) {

	$email_message .= "Full Name: ".($name)."\n";
    $email_message .= "E-mail: ".($email)."\n";
    $email_message .= "Phone: ".($phone)."\n";
    $email_message .= "Message: ".($message)."\n";
    
    $email_from = $name.'<'.$email.'>';

  	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();

	@mail('kontakt@develobora.com', 'Kontakt z develobora.com', $email_message, $headers); 
	//mail('kontakt@develobora.com', 'Kontakt z develobora.com', $message, 'From: ' . $email);
	header('Location: sent.php');
	exit();
}

?>
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
<body id="contact">
	<div id="content">
		<div id="static-wrap">
			<section class="area main-page">
			<div class="shadow"></div>
				<div class="center">
					<div class="header-box">
							<span class="header-top">
						<?php 
							if (empty($errors) === false) {
								echo '<ul>';
								foreach($errors as $error) {
									echo '<li style="opacity: 1; display: inherit; width: inherit; transform: inherit;">', $error, '</li>';
								}
								echo '</ul></ br>';		
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