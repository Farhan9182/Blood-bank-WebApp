<?php

$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
    $name = $_POST['name'];
    $fromEmail = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $toEmail = 'example@example.com';
    $headers = ['From' => $fromEmail, 'Reply-To' => $fromEmail, 'Content-type' => 'text/html; charset=iso-8859-1'];

    $bodyParagraphs = ["Name: {$name}", "Email: {$fromEmail}", "Message:", $message];
    $body = join(PHP_EOL, $bodyParagraphs);
  /*
  1. Open your php.ini (use phpinfo() to know it's location)
  2. Search for the line that reads [mail function]
  3. Add/change the details of your mail server. This could be a local mail server or the mail server of your ISP.
  4. Save/close the php.ini file
  5. Restart your web server
  */
    if (mail($toEmail, $subject, $body, $headers)) {
        echo "OK";
    } else {
        $errorMessage = "1. Open your php.ini (use phpinfo() to know it's location)
        2. Search for the line that reads [mail function]
        3. Add/change the details of your mail server. This could be a local mail server or the mail server of your ISP.
        4. Save/close the php.ini file
        5. Restart your web server";
        echo $errorMessage;
    }
        
}

?>