<?php

require_once "bootstrap.php";

function getDatabase(): array
{
	global $db;
	$query = "SELECT chiave, valore FROM dati";
	$stmt = $db->prepare($query);
	$stmt->execute();
	return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="it">

<head>
	<title>Mostra</title>
	<meta charset="utf-8">
</head>

<body>
	<section>
		<p>db</p>
		<ul>
			<?php
			foreach (getDatabase() as $element) {
				echo "<li>chiave: " . $element["chiave"] . " - valore: " . $element["valore"];
			}
			?>
		</ul>
	</section>
	<section>
		<p>cookie</p>
		<ul>
			<?php
			foreach ($_COOKIE as $key => $value) {
				echo "<li>chiave: " . $key . " - valore: " . $value;
			}
			?>
		</ul>
	</section>
</body>

</html>