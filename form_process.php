<?php 

// define variables and set to empty values
$name_error = $email_error = $phone_error = $message_error = "";
$name = $email = $phone = $message = $success = "";
$errors = "";

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


//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $name_validation = _no_pl($_POST["name"]);

  if (empty($name_validation)) {
    $name_error = "Imię jest wymagane!";
  } else {
    $name = test_input($name_validation);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $name_error = "Tylko litery są dozwolone!"; 
    }
  }

  if (empty($_POST["email"])) {
    $email_error = "E-mail jest wymagany!";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Nieprawidłowy adres e-mail!"; 
    }
  }
  
  if (empty($_POST["phone"])) {
    $phone_error = "";
  } else {
    $phone = test_input($_POST["phone"]);
  }

  if (empty($_POST["message"])) {
    $message_error = "Wiadomość jest wymagana!";
  } else {
    $message = test_input($_POST["message"]);
  }

  $errors = $name_error . $email_error . $phone_error . $message_error;
  
  if ($name_error == '' and $email_error == '' and $message_error == ''){
      $message_body = '';
      unset($_POST['submit']);
      foreach ($_POST as $key => $value){
          $message_body .=  "$key: $value\n";
      }
      
      $to = 'kontakt@develobora.com';
      $subject = 'Kontakt z develobora.com';
      if (mail($to, $subject, $message_body)){
          $success = "Wiadomość została wysłana. Dziękuję za kontakt!";
          $name = $email = $phone = $message = '';
      }
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}