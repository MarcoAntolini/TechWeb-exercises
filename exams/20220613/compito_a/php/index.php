<?php
session_start();
$db = new mysqli("localhost", "root", "", "esami", 3306);
$statoiniziale = "";
for ($i = 0; $i < 81; $i++) {
    $statoiniziale .= "0";
}
for ($i = 0; $i < 8; $i++) {
    $statoiniziale[rand(0, 80)] = rand(1, 9);
}
$db->query("INSERT INTO sudoku (id, statoiniziale) VALUES (1, $statoiniziale)");
