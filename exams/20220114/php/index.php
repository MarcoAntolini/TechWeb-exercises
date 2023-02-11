<?php
session_start();
$db = new mysqli("localhost", "root", "", "db_esami", 3306);

if (validateParameters()) {
    $nome = $_GET["nome"];
    $cognome = $_GET["cognome"];
    $codicefiscale = $_GET["codice-fiscale"];
    $datanascita = $_GET["data-nascita"];
    $sesso = $_GET["sesso"];
    insertCitizen($nome, $cognome, $codicefiscale, $datanascita, $sesso);
    echo "Inserimento avvenuto con successo.";
}
createTable();

function validateParameters()
{
    if (!isset($_GET["nome"])) return false;
    if (!isset($_GET["cognome"])) return false;
    if (!isset($_GET["codice-fiscale"])) return false;
    if (!isset($_GET["data-nascita"])) return false;
    if (!isset($_GET["sesso"])) return false;
    if (!is_string($_GET["nome"])) return false;
    if (!is_string($_GET["cognome"])) return false;
    if (!is_string($_GET["codice-fiscale"])) return false;
    if (strlen($_GET["codice-fiscale"]) != 16) return false;
    if ($_GET["data-nascita"] != date("Y-m-d", strtotime($_GET["data-nascita"]))) return false;
    if ($_GET["sesso"] != "M" && $_GET["sesso"] != "F" && $_GET["sesso"] != "A") return false;
    return true;
}

function insertCitizen($nome, $cognome, $codicefiscale, $datanascita, $sesso)
{
    global $db;
    $query = $db->prepare("INSERT INTO cittadino (nome, cognome, codicefiscale, datanascita, sesso) VALUES (?, ?, ?, ?, ?)");
    $query->bind_param("sssss", $nome, $cognome, $codicefiscale, $datanascita, $sesso);
    $query->execute();
}

function checkId()
{
    if (isset($_GET["id"])) return true;
    return false;
}

function getCitizen($id)
{
    global $db;
    $query = $db->prepare("SELECT * FROM cittadino WHERE idcittadino = ?");
    $query->bind_param('i', $id);
    $query->execute();
    return $query->get_result()->fetch_all(MYSQLI_ASSOC);
}

function getCitizens()
{
    global $db;
    $query = $db->prepare("SELECT * FROM cittadino");
    $query->execute();
    return $query->get_result()->fetch_all(MYSQLI_ASSOC);
}

function createTable()
{
    $data = checkId() ? getCitizen($_GET["id"]) : getCitizens();
    $table = '
        <table>
            <tr>
                <th>idcittadino</th>
                <th>nome</th>
                <th>cognome</th>
                <th>codicefiscale</th>
                <th>datanascita</th>
                <th>sesso</th>
            </tr>
    ';
    foreach ($data as $element) {
        $table .= '
            <tr>
                <td>' . $element["idcittadino"] . '</td>
                <td>' . $element["nome"] . '</td>
                <td>' . $element["cognome"] . '</td>
                <td>' . $element["codicefiscale"] . '</td>
                <td>' . $element["datanascita"] . '</td>
                <td>' . $element["sesso"] . '</td>
            </tr>
        ';
    }
    $table .= '</table>';
    echo $table;
}
