<?php
session_start();

$db = new mysqli("localhost", "root", "", "giugno", 3306);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

function checkValidity($db)
{
    if (!isset($_GET['A'], $_GET['B'], $_GET['O'])) {
        return false;
    }
    if (getSetCount($db, $_GET['A']) === 0) {
        return false;
    }
    if (getSetCount($db, $_GET['B']) === 0) {
        return false;
    }
    if (($_GET['O'] != 'i') and ($_GET['O'] != 'u')) {
        return false;
    }
    return true;
}

function getSetCount($db, $var)
{
    $query = $db->prepare("SELECT COUNT(*) FROM insiemi WHERE insieme = ?");
    $query->bind_param('i', $var);
    $query->execute();
    return $query->get_result()->fetch_row()[0];
}

function createNewArray($db)
{
    $A = initArray($db, $_GET['A']);
    $B = initArray($db, $_GET['B']);
    $result = array();
    if ($_GET['O'] === 'u') {
        $merge = array_merge($A, $B);
        $result = array_unique($merge, SORT_REGULAR);
    } else if ($_GET['O'] === 'i') {
        foreach ($A as $a) {
            foreach ($B as $b) {
                if ($a === $b) {
                    $result[] = $a;
                }
            }
        }
    }
    return $result;
}

function initArray($db, $var)
{
    $query = $db->prepare("SELECT valore FROM insiemi WHERE insieme = ?");
    $query->bind_param('i', $var);
    $query->execute();
    $result = $query->get_result();
    $array = array();
    while ($row = $result->fetch_row()) {
        $array[] = $row[0];
    }
    return $array;
}

function insertArray($db, $array)
{
    $query = $db->prepare("INSERT INTO insiemi (valore, insieme) VALUES (?, ?)");
    $set = getMaxSet($db) + 1;
    foreach ($array as $value) {
        $query->bind_param('ii', $value, $set);
        $query->execute();
    }
}

function getMaxSet($db)
{
    $query = $db->prepare("SELECT MAX(insieme) FROM insiemi");
    $query->execute();
    return $query->get_result()->fetch_row()[0];
}

if (checkValidity($db)) {
    $array = createNewArray($db);
    insertArray($db, $array);
} else {
    echo "Invalid input";
}