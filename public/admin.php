<?php
session_start();

$_SESSION['username'] = 'sam';
$_SESSION['password'] = 'Naruto1990';

if ($_POST['name'] !== $_SESSION['name'] || $_POST['password'] !== $_SESSION['password']) {
    header('Location: ../public/admin.php');
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

<p>Felicitation vous etes arrive ennnnnfffffin sur la page admin</p>
<a href="index.php">Click here to return to home !</a>