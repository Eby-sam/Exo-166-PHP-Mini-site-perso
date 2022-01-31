<?php
session_start();

$_SESSION['username'] = 'sam';
$_SESSION['password'] = 'Naruto1990';

if ($_POST['name'] !== $_SESSION['name'] || $_POST['password'] !== $_SESSION['password']) {
    header('Location: /public/index.php?error=5');
}

if (isset($_GET['error'])) {
    echo "<p>erreur dans le nom ou le mot da passe !!!</p>";
}

$jsonMessage = file_get_contents("../data/last_message.json");
$message = json_decode($jsonMessage);
foreach ($message as $valueMessage) {
    echo "The message : '".$valueMessage."', , has been sent ! <br>";
}
?>
<h1>ADMIN PAGE</h1>
<a href="index.php">Click here to return to home !</a>