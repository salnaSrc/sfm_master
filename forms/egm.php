<?php

    require_once "../init.php";  

?>


<!DOCTYPE html>
<form action="user.php" method="post">
    <p>
        <input type="text" name="txt_user_name" label="Nom" />
        <input type="text" name="txt_user_surname" label="Prénom" />
        <input type="text" name="txt_user_mail" lanbel="Courriel" />
        <input type="password" name="txt_user_password" label="Mot de passe" />
        <input type="submit" value="btn_valid" label ="Valider" />
    </p>
</form>