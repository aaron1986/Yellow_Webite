<?php

if($_POST['robots'] != '') {
echo 'No spammers here!';
} else {
// Process the the form
}

$to = 'admin@travelyayyay.club';
$subject = 'info help ';
$message = 'From: ' . $_POST['full-Name'] . "\n";
$message .= 'Email from: ' . $_POST['email-address'] . "\n";
$message .= "Message:\n" . $_POST['message'] . "\n\n";
$headers .= 'Cc: admin@xxxxx.com';
mail($to, $subject, $message, $headers);


mail ($email, $subject, $message, "from:".$from);

header('Location: index.html');
exit();

?>