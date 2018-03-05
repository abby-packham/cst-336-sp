<?php
function getDataBaseconnection(){

    $host = 'localhost';
    $dbname=$opt;
    
    $username='pack4397';
    $password='';
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbConn;
}
?>