<?php

require_once "bootstrap.php";

if (validate() && checkMetodo()) {
	saveChiaveAndValore();
}

function validate(): bool
{
	if (
		!isset($_GET["chiave"]) ||
		!isset($_GET["valore"]) ||
		!isset($_GET["metodo"])
	) {
		echo "parametri non settati";
		return false;
	}
	return true;
}

function checkMetodo(): bool
{
	if ($_GET["metodo"] === "cookie" || $_GET["metodo"] === "db") {
		return true;
	} else {
		echo "variabile metodo ha un valore sbagliato";
		return false;
	}
}

function saveChiaveAndValore(): void
{
	if ($_GET["metodo"] === "cookie") {
		setcookie($_GET["chiave"], $_GET["valore"], time() + (86400 * 30), "/");
	} elseif ($_GET["metodo"] === "db") {
		if (checkChiave($_GET["chiave"])) {
			updateValore($_GET["chiave"], $_GET["valore"]);
			echo "valore aggiornato per la chiave " . $_GET["chiave"];
		} else {
			insertChiaveAndValore($_GET["chiave"], $_GET["valore"]);
		}
	}
}

function checkChiave($key): bool
{
	global $db;
	$query = "SELECT * FROM dati WHERE chiave = ?";
	$stmt = $db->prepare($query);
	$stmt->bind_param("s", $key);
	$stmt->execute();
	return $stmt->get_result()->fetch_row() > 0;
}

function insertChiaveAndValore($key, $value): void
{
	global $db;
	$query = "INSERT INTO dati (chiave, valore) VALUES (?, ?)";
	$stmt = $db->prepare($query);
	$stmt->bind_param("ss", $key, $value);
	$stmt->execute();
}

function updateValore($key, $value): void
{
	global $db;
	$query = "UPDATE dati SET valore = ? WHERE chiave = ?";
	$stmt = $db->prepare($query);
	$stmt->bind_param("ss", $value, $key);
	$stmt->execute();
}
