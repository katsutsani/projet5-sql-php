<?php
session_start();

$pdo = new PDO(
    'mysql:host=mysql-portfoliogc.alwaysdata.net;dbname=portfoliogc_test;',
    '249600_lilian',
    'Pommes12#',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
?>
