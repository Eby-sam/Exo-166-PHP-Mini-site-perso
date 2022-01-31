<?php

$jsonMessage = file_put_contents("../data/last_message.json", $_POST);
json_encode($jsonMessage);

if (!isset($_POST['submit'])) {
    header('Location: /public/index.php?page=contact&error=0');
    exit();
}

header('Location: admin.php');

$to = "coquelet.samuel@gmail.com";
$from    = trim($_POST["email"]);
$subject = 'Sujet';
$message = htmlentities(trim($_POST["message"]));
$headers = array(
    "Reply-To" => $from,
    "X-Mailer" => "PHP/".phpversion()
);


if (isset($_POST["email"], $_POST["message"])){
    mail($to, $subject, $message, $headers, "-f ".$from);
    exit();
}
header('Location: ../public/admin.php');


$arrayMessage = array($message);

$jsonEncode = json_encode($arrayMessage);
file_put_contents("../data/last_message.json", $jsonEncode);

if (isset($_POST['submit'])) {
    if ($to($to, $subject, $message, $from)) {
        echo "c'est bon!";
    }
    else {
        echo "Error !";
    }
}

if (isset($_POST["email"], $_POST["message"])){
    mail($to, $subject, $message, $headers, "-f ".$from);
}