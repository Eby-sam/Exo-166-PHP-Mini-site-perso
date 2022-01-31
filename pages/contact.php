<?php
    if(isset($_GET['success']) && intval($_GET['success']) === 1) { ?>
        <div>le message a bien ete envoyer !!!</div> <?php
    }
?>
<section>
    <h1>Contact</h1>
    <div id="containerContact">
        <form method="post" action="../public/save.php" >
            <label for="name">Last name :</label>
            <input type="text" name="name" id="name" required>
            <label for="vorname">First name:</label>
            <input type="text" name="vorname" id="vorname" required>
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" required>
            <label for="password">password</label>
            <input type="password" name="password" id="password">
            <label for="password-repeat">password-repeat</label>
            <input type="password" name="password-repeat" id="password-repeat">
            <label for="message">Message :</label>
            <textarea name="message" id="message" required></textarea>
            <input id="send" type="submit" value="Send">
        </form>
    </div>
    <span> My number : 06 69 69 69 69</span>
    <span>My Email :  kingRoiDuBacAsable69@gmail.com</span>
    <span>My adress : 18 rue de la 58 ruelles a droite de la 7 avenue </span>
</section>