<?php
    // default datetime
    date_default_timezone_set('Europe/Paris');       

    // Data base setup
    $_SGBD_CONF['MYSQL_SERVER'] = "127.0.0.1";
    $_SGBD_CONF['MYSQL_DATABASE'] = "sfm_master";
    $_SGBD_CONF['MYSQL_LOGIN'] = "root";
    $_SGBD_CONF['MYSQL_PASSWORD'] = "";

    // directories setting
    $_ROOT="../sfm_master/";
    $_ROOT_BOOTSTRAP="../sfm_master/bootstrap_theme/";        

    // Connexion to MySQL
    $mysqli = mysqli_connect($_SGBD_CONF['MYSQL_SERVER'], $_SGBD_CONF['MYSQL_LOGIN'], $_SGBD_CONF['MYSQL_PASSWORD'], $_SGBD_CONF['MYSQL_DATABASE']);
    if ($mysqli) {    
        /*$result_connect = mysql_selectdb($_CONFIG['MYSQL_DATABASE'], $resource_id);
        if (!$result_connect) {
        die("Le serveur MySQL existe, mais la base de données est introuvable<br />");
        }*/
    } else {
        die("Impossible de se connecter &agrave; la base de données<br />");
    }

?>


