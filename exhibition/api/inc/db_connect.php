<?php
    // set up
    $db_host = 'webtest-db-1';
    $db_user = 'root';
    $db_pw = 'root@0000';
    $db_name = 'exhibition';
    $db_char = 'utf8';
    // connect
    $db_link = new PDO(
        "mysql:host=$db_host; dbname=$db_name; charset=$db_char",
        $db_user, $db_pw
        ) or die("MySQL 連結失敗");
    $db_link->exec("set names utf8");
?>