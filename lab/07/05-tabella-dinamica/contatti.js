const datiTabella = [
  {
    "Autore": "Gino Pino",
    "Email": "ginopino@blogtw.com",
    "Argomenti": "HTML, CSS, JS",
  },
  {
    "Autore": "Cippa Lippa",
    "Email": "cippalippa@blogtw.com",
    "Argomenti": "PHP",
  },
];

function stringaToID(stringa) {
  return stringa.toLowerCase().replace(/[^a-zA-Z]/g, "");
}

const table = document.querySelector("table");
const th = `
	<tr>
		<th id="autore">Autore</th><th id="email">Email</th><th id="argomenti">Argomenti</th>
	</tr>
	`;
table.innerHTML += th;
for (let i = 0; i < datiTabella.length; i++) {
  const datas = `
    <tr>
      <th id="${stringaToID(datiTabella[i]["Autore"])}">${datiTabella[i]["Autore"]}</th>
      <td headers="email ${stringaToID(datiTabella[i]["Autore"])}">${datiTabella[i]["Email"]}</td>
			<td headers="argomenti ${stringaToID(datiTabella[i]["Autore"])}">${datiTabella[i]["Argomenti"]}</td>
    </tr>
    `;
  table.innerHTML += datas;
}