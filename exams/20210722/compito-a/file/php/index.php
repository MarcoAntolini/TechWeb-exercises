<?php
session_start();
$db = new mysqli("localhost", "root", "", "lotto", 3306);
$json_message = '{
    "actionNotSet" : "action not set",
    "invalidAction" : "invalid action",
    "startGame" : "game started",
    "sequenceNotSet" : "sequence not set",
    "loseMessage" : "you lost",
    "winMessage" : "you won" 
}';
$message = json_decode($json_message);
validateAction();

function validateAction()
{
    global $message;
    if (!isset($_GET["action"])) {
        echo $message->actionNotSet;
        return;
    }
    $action = $_GET["action"];
    if ($action == "extract") return addNumber();
    if ($action == "new") return emptyTable();
    if ($action == "check") return checkVariable();
    echo $message->invalidAction;
    return;
}

function checkVariable()
{
    global $message;
    if (!isset($_GET["sequence"])) {
        echo $message->sequenceNotSet;
        return;
    }
    $sequence = explode("-", $_GET["sequence"]);
    foreach ($sequence as $num) {
        if (checkNumber($num)) {
            echo $message->loseMessage;
            return;
        }
    }
    echo $message->winMessage;
    return;
}

function emptyTable()
{
    global $db, $message;
    $query = $db->prepare("DELETE FROM estrazione");
    $query->execute();
    echo $message->startGame;
}

function addNumber()
{
    global $db;
    $num = rand(1, 90);
    if (!checkNumber($num)) return;
    if (countNumbers()[0] >= 5) return;
    $query = $db->prepare("INSERT INTO estrazione (numero) VALUES (?)");
    $query->bind_param('i', $num);
    $query->execute();
}

function countNumbers()
{
    global $db;
    $query = $db->prepare("SELECT COUNT(*) FROM estrazione");
    $query->execute();
    return $query->get_result()->fetch_row();
}

function checkNumber($num)
{
    global $db;
    $query = $db->prepare("SELECT * FROM estrazione WHERE numero = ?");
    $query->bind_param('i', $num);
    $query->execute();
    return $query->get_result();
}
