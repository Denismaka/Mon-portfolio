<?php
// Vérifiez si une session est déjà active
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require('functions/db.php'); 
$message = ""; // Initialisation de la variable $message

if (isset($_POST['submit'])) { // Teste si le formulaire a été soumis

    $nom = htmlspecialchars(trim($_POST['nom']));
    $email = htmlspecialchars(trim($_POST['email']));
    $telephone = htmlspecialchars(trim($_POST['tel']));
    $sujet = htmlspecialchars(trim($_POST['sujet']));
    $messages = htmlspecialchars(trim($_POST['messages'])); 

    if (!empty($nom) && !empty($email) && !empty($telephone) && !empty($messages)) {
        
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            
            if (email_taken($email)) {
                $message = "<font color='red'>Cette adresse email est déjà utilisée !</font>";
            } else {
                userContact($nom, $email, $telephone, $sujet, $messages);
                $message = "<font color='green'>Message envoyé avec succès !</font>";
            }
        } else {
            $message = "<font color='red'>Votre adresse email n'est pas valide !</font>";
        }
    } else {
        $message = "<font color='red'>Tous les champs ne sont pas remplis !</font>";
    }
}

function email_taken($email) {
    global $db;
    $sql = "SELECT COUNT(*) FROM contacts WHERE email = :email";
    $req = $db->prepare($sql);
    $req->bindParam(':email', $email);
    $req->execute();
    $count = $req->fetchColumn();
    return $count > 0;
}

// Fonction permettant de contacter le dev
function userContact($nom, $email, $telephone, $sujet, $messages) {
    global $db;
    $sql = "INSERT INTO contacts(nom, email, telephone, sujet, messages, date_envoi) 
            VALUES (:nom, :email, :telephone, :sujet, :messages, NOW())";
    $req = $db->prepare($sql);
    $c = [
        'nom'       => $nom,
        'email'     => $email,
        'telephone' => $telephone,
        'sujet'     => $sujet,
         'messages'  => $messages,       
    ];
    $req->execute($c);
}
