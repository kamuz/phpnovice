<?php

// Connect to database

try {
  $pdo = new PDO('mysql:host=doskadpk.mysql.ukraine.com.ua;dbname=doskadpk_test', 'doskadpk_test', 'uebcykck');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e) {
  $error = 'Unable to connect to the database server.' . $e->getMessage();
  include 'error.html.php';
  exit();
}
