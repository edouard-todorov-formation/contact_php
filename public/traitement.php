<?php
session_start(); //demarre une session php. Elle permet d'accéder aux données stockées précédemment dans la session.

    if ($_SERVER["REQUEST_METHOD"] === "POST") {        //Si la methode de requete est egale a post...
//===========================================================================================
//                2 recuperer les donnéés.
//===========================================================================================
        $email = $_POST["email"] ??"";          // $email recupere dans $_POST la valeur de la clé email (l'input name="email" dans form)...
        $password = $_POST["password"] ?? "";  // (??) ou si le champ est vide ("") met une valeur null .

        
    if(!empty($email) && (!empty($password))) {  // Si $email ET $password ne sont pas vide (!empty)...
        $newcontact = [                         // on déclare la viariable $newcontact tableau...
            "email" => $email,                 // assoociatif avec la clé "email" qui recupere valeur $email et... 
            "password" => $password           // la clé "password" qui a comme valeur $password.
        ];
        $_SESSION["contact"] = $newcontact;                              // ajoute le "new user" dans $_SESSION[contact].
        echo "<div>Données enregistrées en session avec succès.</div>"; // Affiche un message pour indiquer si le code ci dessus a fonctionné.
        echo '<a href="profil.php">Aller à mon profil</a>';            // Affiche un lien vers profil.php.
        echo "<br><br><div>$ newcontact var_dump</div>";              // Consol log.
        var_dump($newcontact);                                       //...
        echo "<br><br><div>$ _SESSION var_dump</div>";              //...
        var_dump($_SESSION);                                       //...
    } else {
        echo "<div>Veuillez remplir tous les champs.</div>";     // Message d'erreur si les champ ne son pas rempli.
    }
}
