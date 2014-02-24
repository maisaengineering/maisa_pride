<?php

require_once 'google/appengine/api/mail/Message.php';

use google\appengine\api\mail\Message;

// ...

$message_body = " First Name  : $first_name\n\n Last Name  : $last_name\n\n Email : $email\n\n Skype : $skype\n\n Phone Number : $phone\n\n Company Name : $company_name\n\n Company URL : $url\n\n City : $city\n\n Country : $country\n\n Preferred Work Model : $work_model\n\n Description: $description";

$mail_options = [
    "sender" => "snk.navin143@gmail.com",
    "to" => "naveen.maisasolutions@gmail.com",
    "subject" => "Enquire Form",
    "textBody" => $message_body
];

try {
    $message = new Message($mail_options);
    $message->send();
    header("Location: thankyou.php");
} catch (InvalidArgumentException $e) {

}

?>