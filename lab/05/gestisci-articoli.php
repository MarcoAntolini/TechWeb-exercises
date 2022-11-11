<?php
require("bootstrap.php");

if (!isUserLoggedIn() || isset($_GET["action"])) {
    header(("location: login.php"));
}

// $_GET["action"];

$templateParams["titolo"] = "Blog TW - Gestisci articoli";
$templateParams["nome"] = "admin-form.php";
$templateParams["titolo"] = $dbh->getCategories();
$templateParams["titolo"] = $dbh->getRandomPosts(2);

require("template/base.php");