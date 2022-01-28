<?php

$jsonMessage = file_get_contents("../data/last_message.json");
$message = json_decode($jsonMessage);
foreach ($message as $valueMessage) {
    echo "The message : '".$valueMessage."', , has been sent ! <br>";
}
?>

<a href="index.php">Click here to return to home !</a>