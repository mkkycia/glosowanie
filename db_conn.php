<?php
    $mysqlUser = 'marek24';
    $mysqlPassword = 'm4r3cz3k';
    $mysqlHost = 'mysql:host=mysql.staszic.waw.pl; dbname='.$mysqlUser;
    $pdoAttributes = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'");

    try {
        $conn = new PDO($mysqlHost, $mysqlUser, $mysqlPassword, $pdoAttributes);
        /* Zapytania */
    } catch (PDOException $e) {
        echo 'Error: '.$e->getMessage();
    }
?>
