<?php

    require_once "../conf.php"; 
    $the_action=$_GET('the_action');

?>

<!DOCTYPE html>

<form action="user.php" method="post">
    <p><input type="text" name="txt_user_name" value="Name"/></p>
    <p><input type="text" name="txt_user_surname" value="Surname"/></p>
    <p><input type="text" name="txt_user_mail" vamue="Email"/></p>
    <p><input type="password" name="txt_user_password" value="Password"/></p>
    <p><input type="submit" value="btn_valid"/></p>
     
    Aimez-vous les frites ?
    <input type="radio" name="frites" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
    <input type="radio" name="frites" value="non" id="non" /> <label for="non">Non</label>
</form>

<div id="menu">
  <ul id="onglets">
    <li class="active"><a href="Accueil.html"> Accueil </a></li>
    <li><a href="Forums.html"> Forums </a></li>
    <li><a href="Livre_or.html"> Livre d'or </a></li>
    <li><a href="Equipe.html"> L'équipe </a></li>
    <li><a href="Inscription.html"> S'inscrire </a></li>
    <li><a href="Connexion.html"> Se connecter </a></li>
  </ul>
</div>