<?php
require("bootstrap.php");

if (!isUserLoggedIn()) {
    header("location: login.php");
}

if ($_POST["action"] == 1) {
    //Inserisco articolo
    $titoloarticolo = $_POST["titoloarticolo"];
    $testoarticolo = $_POST["testoarticolo"];
    $anteprimaarticolo = $_POST["anteprimaarticolo"];
    $dataarticolo = date("Y-m-d");
    $autore = $_SESSION["idautore"];
    $categorie = $dbh->getCategories();
    $categorie_inserite = array();
    foreach ($categorie as $categoria) {
        if (isset($_POST["categoria_" . $categoria["idcategoria"]])) {
            array_push($categorie_inserite, $categoria["idcategoria"]);
        }
    };
    var_dump($categorie_inserite);
    list($result, $msg) = uploadImage(UPLOAD_DIR, $_FILES["imgarticolo"]);
    if ($result == 1) {
        $imgarticolo =  $msg;
        $id = $dbh->insertArticle($titoloarticolo, $testoarticolo, $anteprimaarticolo, $dataarticolo, $imgarticolo, $autore);
    }
}

var_dump($_POST);

var_dump($_FILES);