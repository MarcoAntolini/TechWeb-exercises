window.onload = function () {
    createTable();
    handleFirstTable();
    handleSecondTable();
};

function createTable() {
    const main = document.querySelector("main");
    const table = document.createElement("table");
    table.setAttribute("id", "numeri");
    table.innerHTML = `
         <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
         </tr>
    `;
    main.innerHTML += table.outerHTML;
}

function handleFirstTable() {
    const table = document.querySelectorAll(".tabellone td");
    table.forEach(td => td.addEventListener("click", function () {
        if (td.style.background == "") {
            td.style.background = "#cacaca";
            const selected = document.querySelector(".selected");
            if (selected) {
                selected.style.background = "";
                selected.classList.remove("selected");
            }
            td.classList.add("selected");
        } else {
            td.style.background = "";
            td.classList.remove("selected");
        }
    }));
}

function handleSecondTable() {
    const table = document.querySelectorAll("#numeri td");
    const log = document.querySelector(".log");
    table.forEach(td => td.addEventListener("click", function () {
        const selected = document.querySelector(".selected");
        if (selected) {
            selected.innerHTML = td.innerHTML;
            selected.style.background = "";
            selected.classList.remove("selected");
            log.innerHTML = "Numero inserito correttamente";
        } else {
            log.innerHTML = "Cella non selezionata";
        }
    }));
}