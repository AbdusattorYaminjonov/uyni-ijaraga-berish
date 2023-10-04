<?php
/*$link = new mysqli('localhost', 'root', '', 'renthouse');*/

$databaseHost = 'localhost';
$databaseName = 'renthouse';
$databaseUsername = 'root';
$databasePassword = '';

$link = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);


