<?php 

require_once "Mail.php";

$from = '<LittleCodeAcademy@gmail.com>';
$to = 'thewush@hotmail.com';
$subject = 'Hi!';
$body = "Hi,\n\nHow are you?";

$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '587',
        'auth' => true,
        'username' => 'lilcodeacademy@gmail.com',
        'password' => 'C0ttonwoodh!eght$'
    ));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    echo('<p>' . $mail->getMessage() . '</p>');
} else {
    echo('<p>Message successfully sent!</p>');
}






 ?>