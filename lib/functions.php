<?php

/*
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent() {
    if(!isset($_GET['page'])){
        include __DIR__.'/../pages/home.php';
    }
    elseif(isset($_GET['page']) && $_GET['page'] == "bio") {

        include __DIR__.'/../pages/bio.php';
    }
    elseif(isset($_GET['page']) && $_GET['page'] == "contact") {

        include __DIR__.'/../pages/contact.php';
    }
}

function getUserData() {
    $file = file_get_contents('../data/user.json');
    $message = json_decode($file);
    foreach ($message as $key){
        if(is_array($key)) {
            foreach ($key as $index2) {
                echo "<div class='border'></div>";
                foreach ($index2 as $index3 => $index4) {
                    echo "<p>".$index4."</p>";
                }
            }
        }
        else {
            echo "<p class='profil'>".$key."</p>";
        }
    }
}


function getPart($name) {
    include __DIR__ . '/../parts/'. $name . '.php';
}

define("ERROR", 0);
define("SUCCESS", 1);

/**
 * Display a simple message on top.
 * @param $message
 * @param int $type
 */
function displayMessage ($message, $type=SUCCESS) {
    $message = strip_tags(base64_decode($message));
    if ($message) {
        $class = $type === ERROR ? "error" : "success";
        echo '<div class="'.$class.'">'.$message.'</div>';
    }
}
