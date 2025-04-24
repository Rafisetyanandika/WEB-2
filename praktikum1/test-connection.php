<?php

$pdo = require 'connection.php';
$statement = $pdo->query("SELECT * FROM users");
print_r($statement->fetchAll());
