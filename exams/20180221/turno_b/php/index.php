<?php

function generaRighe(){
}

function controllaPartita(){
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Esercizio PHP</title>
</head>
<body>
	<header>
		<h1>Esercizio PHP</h1>
	</header>

  <form action="index.php">
  <div>
    <div>
      <input type="radio" id="genera"
       name="radioButton" value="genera">
      <label for="genera">Genera righe</label>

      <input type="radio" id="controlla"
       name="radioButton" value="controlla">
      <label for="controlla">Controlla Partita</label>
    </div>
  	<br>
  <input type="submit" value="Submit">
</div>
</form>
</body>
</html>
