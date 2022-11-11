        <form action="processa-articolo.php" method="POST" enctype="multipart/form-data">
            <h2>Gestisci Articolo</h2>
            <ul>
                <li>
                    <label for="titoloarticolo">Titolo:</label><input type="text" id="titoloarticolo" name="titoloarticolo" value="" />
                </li>
                <li>
                    <label for="testoarticolo">Testo Articolo:</label><textarea id="testoarticolo" name="testoarticolo"></textarea>
                </li>
                <li>
                    <label for="anteprimaarticolo">Anteprima Articolo:</label><textarea id="anteprimaarticolo" name="anteprimaarticolo"></textarea>
                </li>
                <li>
                    <label for="imgarticolo">Immagine Articolo</label><input type="file" name="imgarticolo" id="imgarticolo" />
                </li>
                <li>
                    <input type="checkbox" id="" name="categoria_" /><label for="">Categoria</label>
                </li>
                <li>
                    <input type="submit" name="submit" value="Azione Articolo" />
                    <a href="login.php">Annulla</a>
                </li>
            </ul>
        </form>