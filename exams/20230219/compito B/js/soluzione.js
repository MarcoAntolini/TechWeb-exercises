const generaTabellaButton = document.querySelector("button")
const numeroRigheInput = document.querySelector('input[name="numerorighe"]')
const numeroColonneInput = document.querySelector('input[name="numerocolonne"]')
const errorParagraph = document.querySelectorAll("p")[0]
const table = document.querySelector("table")
const list = document.querySelector("ul")

generaTabellaButton.addEventListener("click", generateTable)

function generateTable() {
	if (!checkInputs()) return displayErrorMessage()
	clearPage()
	const rows = numeroRigheInput.value
	const cols = numeroColonneInput.value
	const firstRow = document.createElement("tr")
	const emptyCell = document.createElement("td")
	firstRow.appendChild(emptyCell)
	for (let j = 1; j <= cols; j++) {
		const colH = document.createElement("th")
		colH.innerHTML = "C" + j
		colH.setAttribute("scope", "col")
		colH.setAttribute("id", "C" + j)
		colH.addEventListener("click", () => clickHeader(j, "C"))
		firstRow.appendChild(colH)
	}
	table.appendChild(firstRow)
	for (let i = 1; i <= rows; i++) {
		const row = document.createElement("tr")
		const rowH = document.createElement("th")
		rowH.innerHTML = "R" + i
		rowH.setAttribute("scope", "row")
		rowH.setAttribute("id", "R" + i)
		rowH.addEventListener("click", () => clickHeader(i, "R"))
		row.appendChild(rowH)
		for (let j = 1; j <= cols; j++) {
			const cell = document.createElement("td")
			cell.innerHTML = parseInt(Math.random() * 1000 + 9000)
			cell.setAttribute("header", "R" + i + " C" + j)
			cell.classList.add("R" + i, "C" + j)
			row.appendChild(cell)
		}
		table.appendChild(row)
	}
}

function checkInputs() {
	return numeroRigheInput.value > 0 && numeroColonneInput.value > 0
}

function displayErrorMessage() {
	errorParagraph.innerHTML = "I numeri delle colonne e delle righe devono essere maggiori di 0"
}

function clearPage() {
	errorParagraph.innerHTML = ""
	table.innerHTML = ""
	list.innerHTML = ""
}

function clickHeader(index, type) {
	const header = type + index
	const tableBody = document.querySelectorAll("td")
	for (const td of tableBody) {
		if (td.textContent !== "") {
			if (td.classList.contains(header)) {
				if (type === "R") {
					td.classList.toggle("selectedRow")
				} else if (type === "C") {
					td.classList.toggle("selectedCol")
				}
			}
		}
	}
	updateColors()
	updateList()
}

function updateColors() {
	const tableBody = document.querySelectorAll("td")
	for (const td of tableBody) {
		if (td.classList.contains("selectedRow") && td.classList.contains("selectedCol")) {
			td.style.backgroundColor = "#0F0"
		} else if (td.classList.contains("selectedRow")) {
			td.style.backgroundColor = "#F00"
		} else if (td.classList.contains("selectedCol")) {
			td.style.backgroundColor = "#00F"
		} else {
			td.style.backgroundColor = "rgba(0, 0, 0, 0)"
		}
	}
}

function updateList() {
	list.innerHTML = ""
	const tableBody = document.querySelectorAll("td")
	for (const td of tableBody) {
		if (td.style.backgroundColor !== "rgba(0, 0, 0, 0)") {
			const li = document.createElement("li")
			li.innerText = td.textContent
			list.appendChild(li)
		}
	}
}
