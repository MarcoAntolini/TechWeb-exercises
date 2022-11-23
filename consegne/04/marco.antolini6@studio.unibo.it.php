<?php
session_start();

$db = new mysqli("localhost", "root", "", "giugno", 3306);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

function getSet($db, $var)
{
    $query = "SELECT COUNT(*) FROM insiemi WHERE insieme=?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('i', $var);
    return $stmt->execute();
}

function checkValidity($db)
{
    if (isset($_GET['A']) && isset($_GET['B'])) {
        if (getSet($db, $_GET['A']) != 0 && getSet($db, $_GET['B']) != 0) {
            return 2;
        }
    }
    return 3;
}

echo (getSet($db, $_GET['A']));
echo (checkValidity($db));