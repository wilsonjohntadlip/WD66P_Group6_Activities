<?php
$password = $_POST['password'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$birthDate = $_POST['birthDate'];
$address = $_POST['address'];
$email = $_POST['email'];
$newsLetter = $_POST['newsLetter'];


function login($username, $password, $firstName, $lastName, $birthDate, $address, $email, $newsLetter) {
    
    $defaultPassword = "password";

    if ($username === $defaultUsername && $password === $defaultPassword) {
      echo "Successfully Logged In";
      echo "\n";
      echo greetings($message);
    } elseif ($username ===  $defaultUsername && $password !== $defaultPassword) {
      echo "You cannot proceed to your account because your password does not match";
    } else {
      echo "Account Does Not Exist";
    }
  }

function greetings($firstName, $lastName, $birthDate, $address, $email, $newsLetter) {
    $firstName = ucwords($firstName); // Capitalize first name
    $lastName = ucwords($lastName); // Capitalize last name
    $email = strtolower($email); // email to lowercase

    $greeting = "Hi $firstName $lastName! \n Welcome to My System.";
    $birthdateMsg = "Your birthdate is: $birthDate";
    $addressMsg = "You are currently residing at: $address";
    $emailMsg = "Your email is: $email";

    getNewsLetter($newsLetter); 

    $thankYouMsg = "Thank you for registering.";

    // Combine
    $fullMessage = "$greeting\n$birthdateMsg\n$addressMsg\n$emailMsg\n$thankYouMsg";

    return $fullMessage;
}

function getNewsLetter($newsLetter) {
    if ($newsletter === 'true') {
    echo "Thanks for subscribing to our newsletters.";
    }
}