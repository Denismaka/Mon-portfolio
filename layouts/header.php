<?php
// Vérifiez si une session est déjà active
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Démarre la session
}

include 'functions/db.php';

// Vérifie si l'utilisateur est connecté et a le grade 1
if (isset($_SESSION['user_id']) && $_SESSION['role'] == 1) {
    header("Location: dashboard.php"); // Redirige vers le dashboard
    exit(); // Termine le script
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/fonts/css/all.min.css" />
    <link rel="stylesheet" href="assets/js/app.js" />
    <link rel="website icon" href="assets/images/denis 30.jpg" />
    <link rel="stylesheet" href="assets/bootstrap-icons/bootstrap-icons.css">
    <title>Denis Maka</title>
</head>

<body>



    <?php include('nav.php') ?>