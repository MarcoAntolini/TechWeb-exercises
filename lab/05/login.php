<?php

require_once 'bootstrap.php';
//Controllare se l'utente sta facendo login
if (isset($_POST["username"]) && isset($_POST["password"])) {
    //L'utente sta facendo login
    $login_result = $dbh->checkLogin($_POST["username"], $_POST["password"]);
    if (count($login_result) == 0) {
        //Restituiamo un messaggio di errore
        $templateParams["errorelogin"] = "Errore Login! Username e/o password errati.";
    } else {
        registerLoggedUser($login_result[0]);
    }
}

if (isUserLoggedIn()) {
    $templateParams["titolo"] = "Blog TW - Admin";
    $templateParams["nome"] = "login-home.php";
    $templateParams["articoli"] = $dbh->getPostsByAuthorId($_SESSION["idautore"]);
} else {
    $templateParams["titolo"] = "Blog TW - Login";
    $templateParams["nome"] = "login-form.php";
}

$templateParams["categorie"] = $dbh->getCategories();
$templateParams["articolicasuali"] = $dbh->getRandomPosts(2);

require 'template/base.php';