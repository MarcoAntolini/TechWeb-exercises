<?php

function inserisciCella(){
}

function controllaCella(){
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

  <form action="index.php" method="get">
  <div>
    <div>
      <input type="radio" id="inserisci"
       name="radioButton" value="inserisci">
      <label for="insesci">inserisci</label>

      <input type="radio" id="controlla"
       name="radioButton" value="controlla">
      <label for="controlla">controlla cella</label>
    </div>

  <label for="numero">Numero</label>
  <input type="text" name="numero" value="numero">
  <br>
  <label for="cella">Cella (colonna/riga):</label>
  <input type="text" name="cella" value="cella">
  <br>
  <input type="submit" value="Submit">
</div>
</form>
</body>
</html>
