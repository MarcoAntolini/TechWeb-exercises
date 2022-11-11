<?php
require_once 'bootstrap.php';

$templateParams["titolo"] = "Blog TW - Login";
$templateParams["nome"] = "login-form.php";

$templateParams["categorie"] = $dbh->getCategories();
$templateParams["articolicasuali"] = $dbh->getRandomPosts(2);

require 'template/base.php';
?>