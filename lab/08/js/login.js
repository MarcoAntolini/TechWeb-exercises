function generaLoginForm(loginerror=null){
    let form = `
    <form action="#" method="POST">
        <h2>Login</h2>
        <p></p>
        <ul>
            <li>
                <label for="username">Username:</label><input type="text" id="username" name="username" />
            </li>
            <li>
                <label for="password">Password:</label><input type="password" id="password" name="password" />
            </li>
            <li>
                <input type="submit" name="submit" value="Invia" />
            </li>
        </ul>
    </form>`;

    return form;
}


function generaArticoli(articoli){
    let result = `
    <section>
        <h2>Articoli</h2>
        <a href="gestisci-articoli.php?action=1">Inserisci Articolo</a>
        <table>
            <tr>
                <th>Titolo</th><th>Immagine</th><th>Azione</th>
            </tr> `

    for(let i=0; i < articoli.length; i++){
        result+= `
            <tr>
                <td>${articoli[i]["titoloarticolo"]}</td>
                <td><img src="${articoli[i]["imgarticolo"]}" alt="" /></td>
                <td>
                    <a href="gestisci-articoli.php?action=2&id=${articoli[i]["idarticolo"]}">Modifica</a>
                    <a href="gestisci-articoli.php?action=3&id=${articoli[i]["idarticolo"]}">Cancella</a>
                </td>
            </tr>
        `;
    }
    result += `
        </table>
    </section>`;
    
    
    return result;
}

