<?php
session_start();

$db = new mysqli("localhost", "root", "", "giugno", 3306);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

function getCount($db, $var)
{
    $query = $db->prepare("SELECT COUNT(*) FROM insiemi WHERE insieme = ?");
    $query->bind_param('i', $var);
    $query->execute();
    return $query->get_result()->fetch_row()[0];
}

function checkValidity($db)
{
    if (!isset($_GET['A'], $_GET['B'], $_GET['O'])) {
        return false;
    }
    if (getCount($db, $_GET['A']) == 0) {
        return false;
    }
    if (getCount($db, $_GET['B']) == 0) {
        return false;
    }
    if (($_GET['O'] != 'i') or ($_GET['O'] != 'u')) {
        return false;
    }
    return true;
}

function initArray($db, $var)
{
    $query = $db->prepare("SELECT * FROM insiemi WHERE insieme = ?");
    $query->bind_param('i', $var);
    $query->execute();
    return $query->get_result()->fetch_all(MYSQLI_ASSOC);
}

function createNewArray($db)
{
    if ($_GET['O'] == 'u') {
        $union = array_merge(initArray($db, $_GET['A']), initArray($db, $_GET['B']));
        return $union;
    } else if ($_GET['O'] == 'i') {
        $intersection = array_intersect(initArray($db, $_GET['A']), initArray($db, $_GET['B']));
        return $intersection;
    }
}

var_dump(createNewArray($db));
