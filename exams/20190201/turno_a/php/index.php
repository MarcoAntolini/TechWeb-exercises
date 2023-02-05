<?php

?>

 <!DOCTYPE html>
 <html>
   <head>
     <title>Bingo</title>
   </head>
   <body>
     <h1>Esercizio PHP</h1>
     <div>
       <form action="index.php">
         <h2>Bingo</h2>
         <section id="numbers">
          <label for="bingo_row1">
            Riga1: <input type="text" id="bingo_row1" name="bingo_row1">
          </label>
          <label for="bingo_row2">
            Riga2: <input type="text" id="bingo_row2" name="bingo_row2">
          </label>
          <label for="bingo_row3">
            Riga3: <input type="text" id="bingo_row3" name="bingo_row3">
          </label>
         </section>
         <section id="control">
           <input type="radio" name="bingo" value="cinquina">Controlla cinquina<br>
           <input type="radio" name="bingo" value="bingo">Controlla bingo<br>
        </section>
        <input type="submit" value="submit">
        </form>
     </div>
   </body>
 </html>
