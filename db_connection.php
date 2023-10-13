<?php
$host = 'your_host';
$dbname = 'your_database_name';
$username = 'your_username';
$password = 'your_password';

$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
