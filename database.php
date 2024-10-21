<?php
$host = '';
$port = '';
$dbname = '';
$username = '';
$password = '';
$dsn = "mysql:host={$host};port={$port};dbname={$dbname};charset=utf8";

try {
    $dbh = new PDO($dsn, $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//    echo 'connected';
} catch (PDOException $e) {
//    echo $e->getMessage();
}