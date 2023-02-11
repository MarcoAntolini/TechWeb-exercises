window.onload = function () {
    let matrix = Array(6).fill().map(() => Array(7));
    for (let i = 0; i < 6; i++) {
        for (let j = 0; j < 7; j++) {
            matrix[i][j] = Math.round(Math.random() + 1);
        }
    }
    fillTable(matrix);
    const button = document.querySelector("button");
    button.addEventListener("click", function () {
        clickButton(matrix);
    });
};

function fillTable(matrix) {
    const table = document.querySelectorAll("table")[0];
    for (let i = 0; i < 6; i++) {
        const row = document.createElement("tr");
        table.append(row);
        for (let j = 0; j < 7; j++) {
            const cell = document.createElement("td");
            if (matrix[i][j] === 1) {
                cell.style.backgroundColor = "red";
            } else {
                cell.style.backgroundColor = "blue";
            }
            row.append(cell);
            cell.addEventListener("click", function () {
                cell.style.backgroundColor = "";
                matrix[i][j] = 0;
            });
        }
    }
}

function clickButton(matrix) {
    const table1 = document.querySelectorAll("table")[0];
    const table2 = document.querySelectorAll("table")[1];
    table2.innerHTML = table1.innerHTML;
    const elements = document.querySelectorAll("td");
    elements.forEach(element => {
        if (element.parentElement.parentElement.parentElement.parentElement.classList.contains("copia")) {
            element.innerHTML = matrix[element.parentElement.rowIndex][element.cellIndex];
        }
    });
};