<?php
// Vérifiez si une session est déjà active
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$dbhost = 'localhost';
$dbname = 'portfolio_db';
$dbuser = 'root';
$dbpassword = '';

try {
    $db = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $dbuser, $dbpassword, 
    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
} catch (PDOException $e) {
    die("Une erreur est survenue lors de la connexion à la base des données");
}




#Fonction de conexion de l'admin
// function getAdmin()
// {

//     if (isset($_SESSION['id_user'])) {
//         $IDAdm = $_SESSION['id_user'];
//         global $db;

//         $a = ['id_user' => $IDAdm];


//         $sql = "SELECT * FROM users WHERE id_user = $IDAdm";
//         $req = $db->prepare($sql);
//         $req->execute($a);

//         $result = $req->fetchObject();
//         return $result;
//     }
// }

// $adminInfo = getAdmin();
