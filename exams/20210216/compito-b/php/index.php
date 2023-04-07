<?php

session_start();

class DbOP
{
	private $db;

	public function __construct()
	{
		$this->db = new mysqli("localhost", "root", "", "febbraio2", 3306);
	}

	public function verify_input(): bool
	{
		if (!isset($_GET["mode"])) return false;
		if ($_GET["mode"] !== "html" && $_GET["mode"] !== "json") return false;
		if (isset($_GET["id"]) && !$this->checkId($_GET["id"])) return false;
		return true;
	}

	public function checkId(string $id): bool
	{
		$query = "SELECT * FROM dati WHERE id = ?";
		$stmt = $this->db->prepare($query);
		$stmt->bind_param("s", $id);
		$stmt->execute();
		return $stmt->get_result()->fetch_row() > 0;
	}

	public function select_row(): array
	{
		if (isset($_GET["id"])) {
			$query = "SELECT * FROM dati WHERE id = ?";
			$stmt = $this->db->prepare($query);
			$stmt->bind_param("s", $_GET["id"]);
		} else {
			$query = "SELECT * FROM dati";
			$stmt = $this->db->prepare($query);
		}
		$stmt->execute();
		return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	}

	public function print_html(array $array): void
	{
		$html = "
			<table>
				<tr>
					<th>id</th>
					<th>chiave</th>
					<th>valore</th>
				</tr>
		";
		foreach ($array as $element) {
			$html = $html . "
				<tr>
					<td>" . $element["id"] . "</td>
					<td>" . $element["chiave"] . "</td>
					<td>" . $element["valore"] . "</td>
				</tr>
			";
		}
		$html = $html . "
			</table>
		";
		echo $html;
	}

	public function print_json(array $array): void
	{
		echo json_encode($array);
	}
}

$class = new DbOP();

?>

<!DOCTYPE html>

<html lang="it">

<head>
	<title>Esame</title>
	<meta charset="utf-8">
</head>

<body>
	<?php
	if ($class->verify_input()) {
		if ($_GET["mode"] === "html") {
			$class->print_html($class->select_row());
		} elseif ($_GET["mode"] === "json") {
			$class->print_json($class->select_row());
		}
	} else {
		echo "parametri non settati";
	}
	?>
</body>

</html>