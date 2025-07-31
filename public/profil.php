<?php
session_start(); //demarre une session php. Elle permet d'accéder aux données stockées précédemment dans la session.

if (!empty($_SESSION["contact"])) {                                        // Si ($_SESSION["contact"]) n'est pas vide (user connecté)....
    echo "Bienvenue, " . htmlspecialchars($_SESSION["contact"]["email"]); // message pour le dire
    echo "<br><br>";
    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";
} else {                                // Sinon
    echo "Vous n'êtes pas connecté.";  // Message d'erreur si $_SESSION est vide (pas de user connecté).
}
?>