<?php

$host = 'http://localhost/company-crud/';

$server = "localhost";
$user = "root";
$password = "bcd127";
$database = "crud";

try {
  $conn = mysqli_connect($server, $user, $password, $database);
} catch (\Throwable $th) {
  throw $th;
}
