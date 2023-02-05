<html lang="it">
  <head>
    <title>Esercizio PHP</title>
  </head>
  <body>
    <div class="header">
      <a  class="home">Esercizio PHP</a>
      <div class="products">
        <a href="index.php">Homepage</a>
        <a href="settings.php">Settings</a>
      </div>
    </div>

    <form action="settings.php" method="post" style="border: 2px dotted blue; text-align:center; width: 400px;">
	   <p>
		     <label for="username">Username </label><input name="username" type="text" value="" >
	   </p>
     <p>
       <label for="notizie">Categoria notizie:</label>
       <select name="notizie">
         <option value="">--------</option>
          <option value="politica" >Politica</option>
          <option value="attualità" >Attualità</option>
          <option value="sport" >Sport</option>
          <option value="scienze" >Scienze</option>
        </select>
	   </p>
		 <p>
      <input type="checkbox" name="remember" /> Remember me
	   </p>
		<p>
      <input type="submit" value="submit"></input>
    </p>
    </form>

  </body>
</html>
