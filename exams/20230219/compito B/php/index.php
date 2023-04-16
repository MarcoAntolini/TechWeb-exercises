<?php

session_start();

$db = new mysqli("localhost", "root", "", "esami", 3306);

function checkGetId()
{
	return isset($_GET["id"]);
}

function checkGetDbParameters()
{
	return isset($_GET["title"])
		&& isset($_GET["year"])
		&& isset($_GET["rated"])
		&& isset($_GET["released"])
		&& isset($_GET["runtime"])
		&& isset($_GET["genre"])
		&& isset($_GET["director"])
		&& isset($_GET["poster"]);
}

function checkFilm()
{
	global $db;
	$query = "SELECT * FROM movies WHERE Id = ?";
	$stmt = $db->prepare($query);
	$stmt->bind_param("s", $_GET["id"]);
	$stmt->execute();
	return $stmt->get_result()->fetch_row() !== array();
}

function deleteFilm()
{
	global $db;
	$query = "DELETE FROM movies WHERE Id = ?";
	$stmt = $db->prepare($query);
	$stmt->bind_param("s", $_GET["id"]);
	$stmt->execute();
}

function getFilms()
{
	global $db;
	$query = "SELECT * FROM movies";
	$stmt = $db->prepare($query);
	$stmt->execute();
	return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
}

function generateTable($array)
{
	$result = "<table>";
	$result .= "
		<tr>
			<th id=\"Id\">Id</th>
			<th id=\"Title\">Title</th>
			<th id=\"Year\">Year</th>
			<th id=\"Rated\">Rated</th>
			<th id=\"Released\">Released</th>
			<th id=\"Runtime\">Runtime</th>
			<th id=\"Genre\">Genre</th>
			<th id=\"Director\">Director</th>
			<th id=\"Poster\">Poster</th>
		</tr>
	";
	foreach ($array as $film) {
		$result .= "
			<tr>
				<td headers=\"Id\">" . $film["Id"] . "</td>
				<td headers=\"Title\">" . $film["Title"] . "</td>
				<td headers=\"Year\">" . $film["Year"] . "</td>
				<td headers=\"Rated\">" . $film["Rated"] . "</td>
				<td headers=\"Released\">" . $film["Released"] . "</td>
				<td headers=\"Runtime\">" . $film["Runtime"] . "</td>
				<td headers=\"Genre\">" . $film["Genre"] . "</td>
				<td headers=\"Director\">" . $film["Director"] . "</td>
				<td headers=\"Poster\">" . $film["Poster"] . "</td>
			</tr>
		";
	}
	$result .= "</table>";
	return $result;
}

function insertFilm()
{
	global $db;
	$query = "INSERT INTO movies(Title, Year, Rated, Released, Runtime, Genre, Director, Poster) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
	$stmt = $db->prepare($query);
	$stmt->bind_param(
		"ssssssss",
		$_GET["title"],
		$_GET["year"],
		$_GET["rated"],
		$_GET["released"],
		$_GET["runtime"],
		$_GET["genre"],
		$_GET["director"],
		$_GET["poster"]
	);
	$stmt->execute();
}

?>

<!DOCTYPE html>
<html lang="it">

<head>
	<title>Esame</title>
	<meta charset="utf-8">
</head>

<body>
	<?php
	if (checkGetId()) {
		if (checkFilm()) {
			deleteFilm();
			echo "<p>Cancellazione avvenuta con successo</p>";
			echo generateTable(getFilms());
		} else {
			echo "<p>Nessun film presente con questo id</p>";
		}
	} elseif (checkGetDbParameters()) {
		insertFilm();
		echo "<p>Film inserito con successo</p>";
	} else {
		echo "<p>Parametri passati sbagliati o insufficienti</p>";
	}
	?>
</body>

</html>

<!--
	?id=3
	?title=titolo
	&year=2023
	&rated=15
	&released=2012
	&runtime=234
	&genre=horror
	&director=dio
	&poster=bellissimo
-->