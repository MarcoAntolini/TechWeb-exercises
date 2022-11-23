<?php
session_start();

$db = new mysqli("localhost", "root", "", "giugno", 3306);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

function hjk($db)
{
    $query = "";
    $stmt = $db->prepare($query);
    $stmt->bind_param();
    return $stmt->execute();
}