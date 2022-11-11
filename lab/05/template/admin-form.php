        <form action="processa-articolo.php" method="POST" enctype="multipart/form-data">
            <h2>Gestisci Articolo</h2>
            <ul>
                <li>
                    <label for="titoloarticolo">Titolo:</label><input type="text" id="titoloarticolo"
                        name="titoloarticolo" value="" />
                </li>
                <li>
                    <label for="testoarticolo">Testo Articolo:</label><textarea id="testoarticolo"
                        name="testoarticolo"></textarea>
                </li>
                <li>
                    <label for="anteprimaarticolo">Anteprima Articolo:</label><textarea id="anteprimaarticolo"
                        name="anteprimaarticolo"></textarea>
                </li>
                <li>
                    <label for="imgarticolo">Immagine Articolo</label><input type="file" name="imgarticolo"
                        id="imgarticolo" />
                </li>
                <li>
                    <?php foreach ($templateParams["categorie"] as $categoria) : ?>
                    <input type="checkbox" id="<?php echo $categoria["idcategoria"]; ?>"
                        name="categoria_<?php echo $categoria["idcategoria"]; ?>" />
                    <label for="<?php echo $categoria["idcategoria"]; ?>">
                        <?php echo $categoria["nomecategoria"]; ?></label>
                    <?php endforeach; ?>
                </li>
                <li>
                    <input type="submit" name="submit" value="<?php echo getAction($_GET["action"]); ?> Articolo" />
                    <a href="login.php">Annulla</a>
                </li>
            </ul>

            <input type="hidden" name="action" value="<?php echo $_GET["action"]; ?>">
        </form>