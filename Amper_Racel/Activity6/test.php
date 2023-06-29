<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$birthDate = $_POST['birthDate'];
$address = $_POST['address'];
$city = $_POST['city'];
$province = $_POST['province'];
$zip = $_POST['zip'];
$emailAdd = $_POST['emailAdd'];
$password = $_POST['password'];
$confirm = $POST['confirmPassword'];

if ($password != $confirm) {
echo "You cannot proceed to your account because your password does not match";
 return;

}

echo "Hi" . ucwords($firstName) . " " . ucwords($lastName);
echo "<br />Welcome to My System";
echo "<br /> Your birthdate is" . $birthDate;
echo "<br /> You are currently residing at " .  ucwords($address) . " " . ucwords($city) . " " . ucwords($province);
echo "<br /> Your email is " . strlower($emailAdd);

if (isset($_POST[ 'subscribe'])) {
     echo "<br />Thanks for subscribing to our latest news";

}
echo "<br /><br /> Thank you for registering";

