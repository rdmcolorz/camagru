<?php
    DEFINE('DB_USERNAME', 'root');
    DEFINE('DB_PASSWORD', 'woethemysql34');
    DEFINE('DB_HOST', 'localhost');
    DEFINE('DB_DATABASE', 'camagru');

    # set mysqli class
    # https://documentation.mamp.info/en/MAMP-Mac/How-Tos/Connect-to-MySQL-from-PHP/
    # reset mysql root password : https://www.tech-otaku.com/local-server/resetting-mamp-mysql-root-user-password/
    $db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    if (mysqli_connect_error()) {
        die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
    }
    echo "<script>console.log( 'Connected to database.' );</script>";
    $db->close();
?>