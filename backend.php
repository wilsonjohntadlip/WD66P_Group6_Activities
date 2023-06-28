<?php

$password = $_POST['password'];
$confirmpassword = $_POST['confirmPassword'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$birthDate = $_POST['birthDate'];
$address = $_POST['address'];
$email = $_POST['email'];
$subscribe = isset($_POST['subscribe']);

function verifyPasswordsMatch($password, $confirmpassword) {
  return $password === $confirmpassword;
}

function greetings($firstName, $lastName, $birthDate, $address, $email, $subscribe) {
  $firstName = ucwords($firstName); // Capitalize first name
  $lastName = ucwords($lastName); // Capitalize last name
  $email = strtolower($email); // Convert email to lowercase

  $greeting = "Hi $firstName $lastName!";
  $birthdateMsg = "Your birthdate is: $birthDate";
  $addressMsg = "You are currently residing at: $address";
  $emailMsg = "Your email is: $email";
  $additionalMsg = "";

  // If subscribed
  if ($subscribe) {
    $additionalMsg = "Thanks for subscribing to our latest news.";
  }

  $thankYouMsg = "Thank you for registering.";

  // Combine message
  $combinedMsg = "$greeting<br>" .
               "Welcome to My System.<br>" .
               "$birthdateMsg<br>" .
               "$addressMsg<br>" .
               "$emailMsg<br>" .
               "$additionalMsg<br><br>" .
               "$thankYouMsg<br>";
  
  echo $combinedMsg;
  
}

if (verifyPasswordsMatch($password, $confirmpassword)) {
  greetings($firstName, $lastName, $birthDate, $address, $email, $subscribe);
} else {
  // Passwords do not match, show error message
  echo "You cannot proceed to your account because your password does not match";
}
