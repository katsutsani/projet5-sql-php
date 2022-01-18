<?php
session_start();

$pdo = new PDO(
    'mysql:host=mysql-portfoliogc.alwaysdata.net;dbname=portfoliogc_test;',
<<<<<<< HEAD
    '249600_lilian',
    'Pommes12#',
=======
    '249600',
    'Samspeed6425',
>>>>>>> 0d9450c9b2ae5cdae5174bdbf8f5fcf24eeaf944
    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
?>
