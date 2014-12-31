<?php
require_once 'google/appengine/api/mail/Message.php';

use google\appengine\api\mail\Message;

// ...
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$skype = $_POST['skype'];
$phone = $_POST['phone'];
$company_name = $_POST['company_name'];
$url = $_POST['url'];
$city = $_POST['city'];
$country = $_POST['country'];
$work_model = $_POST['work_model'];
$description = $_POST['description'];

$message = " First Name  : $first_name\n\n Last Name  : $last_name\n\n Email : $email\n\n Skype : $skype\n\n Phone Number : $phone\n\n Company Name : $company_name\n\n Company URL : $url\n\n City : $city\n\n Country : $country\n\n Preferred Work Model : $work_model\n\n Description: $description";

$mail_options = [
    "sender" => "chandan.benjaram@gmail.com",
    "to" => "contact@maisasolutions.com",
    "subject" => "Enquire Form",
    "textBody" => $message
];

	
	try {
    $message = new Message($mail_options);
    $message->send();
    header("Location: index.html");
} catch (InvalidArgumentException $e) {

}
?>