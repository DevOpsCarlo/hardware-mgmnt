<?php
$pageTitle = 'Dashboard';

// if (!isset($_SESSION['user'])) {
//   header('Location: /');
//   exit();
// }

// $username = $_SESSION['user']['username'];
// $role = $_SESSION['user']['role'];


if (!isset($_SESSION['user'])) {
  header('Location: /');
  exit();
}

// Access specific columns dynamically
$user = $_SESSION['user'];
date_default_timezone_set('Asia/Manila');

$datetime = new DateTime('2025-05-13 17:34:10');
$dateNow = $datetime->format('F j, Y - h:i A');




require("views/dashboard.views.php");
