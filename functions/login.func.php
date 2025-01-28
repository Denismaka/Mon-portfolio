<?php
// session_start();
require 'db.php';

if (isset($_POST['submit'])) {
    $nom = isset($_POST['nom']) ? trim(htmlspecialchars($_POST['nom'])) : '';
    $email = isset($_POST['email']) ? trim(htmlspecialchars($_POST['email'])) : '';
    $password = isset($_POST['passwords']) ? trim(htmlspecialchars($_POST['passwords'])) : '';

    if (!empty($email) && !empty($password) && !empty($nom)) {
        if ($userInfo = userConnect($email)) {
            if (password_verify($password, $userInfo['mot_de_passe'])) {
                // Initialiser les variables de session
                $_SESSION['id_admin'] = $userInfo['id_admin'];
                $_SESSION['nom'] = $userInfo['nom'];
                $_SESSION['email'] = $userInfo['email'];

                // Récupérer le rôle de l'utilisateur
                $roleInfo = getUserRole($userInfo['id_admin']);
                $_SESSION['id_role'] = $roleInfo['id_role']; // Assurez-vous que c'est le bon champ

                // Debug : Vérifiez la valeur du rôle
                var_dump($_SESSION['id_role']); // Ajoutez ceci pour déboguer

                // Rediriger en fonction du rôle
                if ($_SESSION['id_role'] == 1) {
                    header('Location: dashboard.php?id_user=' . $_SESSION['id_admin']);
                } else {
                    header('Location: index.php?page=home&id_admin=' . $_SESSION['id_admin']);
                }
                exit; // Toujours utiliser exit après un header
            } else {
                $error = "<font color='red'>Mot de passe incorrect !</font>";
            }
        } else {
            $error = "<font color='red'>Cet utilisateur n'existe pas !</font>";
        }
    } else {
        $error = "<font color='red'>Tous les champs ne sont pas remplis !</font>";
    }
}

function userConnect($email)
{
    global $db;
    $sql = "SELECT * FROM administrateur WHERE email = :email";
    $req = $db->prepare($sql);
    $req->execute(['email' => $email]);
    return $req->fetch(PDO::FETCH_ASSOC); // Retourne les informations de l'utilisateur
}

function getUserRole($id_admin)
{
    global $db;
    $sql = "SELECT * FROM role WHERE id_admin = :id_admin"; // Assurez-vous que la colonne id_admin existe dans la table role
    $stmt = $db->prepare($sql);
    $stmt->execute(['id_admin' => $id_admin]);
    return $stmt->fetch(PDO::FETCH_ASSOC); // Retourne les informations du rôle
}




    // if (isset($_POST['submit'])) {
    
    //     $nom = isset($_POST['nom']) ? trim(htmlspecialchars($_POST['nom'])) : '';
    //     $email = isset($_POST['email']) ? trim(htmlspecialchars($_POST['email'])) : '';
    //     $password = isset($_POST['passwords']) ? trim(htmlspecialchars($_POST['passwords'])) : '';
    
    //     if (!empty($email) && !empty($password) && !empty($nom)) {
            
    //         if (userConnect($email) == 1) {
    //             $pas = userInfo($email, $password);
    //             $motpass_user_hasher = sha1($password);
                
    //             if ($motpass_user_hasher == $pas['passwords']) {
    //                 $userInfo = userInfo($email, $password);
                    
    //                 if (is_array($userInfo)) {
    //                   $userInfo = userInfo($email, $password);
    //                       $_SESSION['id_admin'] = $userInfo['id_admin'];
    //                       $_SESSION['nom'] = $userInfo['nom'];
    //                       $_SESSION['email'] = $userInfo['email'];
    //                       $_SESSION['passwords'] = $userInfo['passwords'];
    //                       $_SESSION['id_role'] = $userInfo['id_role'];
                          
             
    //                       if ($_SESSION['id_role'] == 1) {
    //                         header('Location: dashboard.php?id_user=' . $_SESSION['id_admin']);
    //                     } else {
    //                         header('Location: index.php?page=home&id_admin=' . $_SESSION['id_admin']);
    //                     }
    //                 } else {
    //                     $error = "<font color='red'>Mot de passe incorrect !</font>";
    //                 }
    //             } else {
        
    //                 $error = "<font color='red'>Cet utilisateur n'existe pas ! ";
    //             }
    //         } else {
    //             $error = "<font color='red'>Tous les champs ne sont pas remplis !</font>";
    //         }
    //     }
    // }
    


// Permet la connection d'adm à la DB
// function userConnect($email)
// {
//     $password = htmlspecialchars(trim($_POST['passwords']));
//     global $db;

//     $a = ['email' => $email];

//     $sql = "SELECT * FROM administrateur WHERE email = :email";
//     $req = $db->prepare($sql);
//     $req->execute($a);

//     $exist = $req->rowCount();

//     return $exist;
// }



