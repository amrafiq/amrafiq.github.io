<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Message Sent</title>
</head>
<body>
<?php
    $myEmailAddress = "amrafiq@asu.edu";

    $subject = $_POST['Subject'];
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];
    $header = "from: $name <$email>";
    
    mail($myEmailAddress, $name, $subject, $message, $header);
?>
     
    <p>Thanks!</p>
</body>
</html>