<?php
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=employees', 'ravindu', '1234');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
 }
 catch (PDOException $e)
 {
  $error = "unable to connect to the database server.\n" . $e;
  include 'error.html.php';
  exit();
 }

