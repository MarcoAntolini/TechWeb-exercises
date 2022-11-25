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

function initTable() {
  const table = document.querySelector("table");
  const header = `
	<tr>
		<th id="autore">Autore</th><th id="email">Email</th><th id="argomenti">Argomenti</th>
	</tr>
	`;
  table.innerHTML += header;
}

function addRemoveData() {
  const table = document.querySelector("table");
  const tableKeys = Object.keys(datiTabella[0]);

  let th_row = "<tr>";
  for (let i = 0; i < tableKeys.length; i++) {
    th_row += `<th id="${stringaToID(tableKeys[i])}">${tableKeys[i]}</th>`;
  }
  th_row += "</tr>";

  table.innerHTML += th_row;

  for (let row = 0; row < datiTabella.length; row++) {
    let td_row = "<tr>";
    let row_id = stringaToID(datiTabella[row][tableKeys[0]]);
    td_row += `<th id="${row_id}">${datiTabella[row][tableKeys[0]]}</th>`;
    for (let i = 1; i < tableKeys.length; i++) {
      td_row += `<td headers="${row_id} ${stringaToID(tableKeys[i])}">${datiTabella[row][tableKeys[i]]}</td>`;
    }
    td_row += "</tr>";
    table.innerHTML += td_row;
    console.log(td_row);
  }

}