<?php

?>

 <!DOCTYPE html>
 <html>
   <head>
     <title>Note</title>
   </head>
   <body>
     <h1>Esercizio PHP</h1>
     <div>
       <form action="index.php">
         <h2>Prendi nota</h2>
         <section id="noteSection">
          <label for="title">
            Titolo: <input type="text" id="title" name="title">
          </label>
          <label for="title">
            Data: <input type="date" id="date" name="date">
          </label>
          <label for="nota">
            Nota: <input type="text" id="nota" name="nota">
          </label>
         </section>
         <section id="control">
           <input type="radio" name="nota" value="add">Aggiungi nota<br>
           <input type="radio" name="nota" value="read">Leggi note<br>
           <input type="radio" name="nota" value="delete">Rimuovi nota<br>
        </section>
        <input type="submit" value="submit">
        </form>
     </div>
   </body>
 </html>
