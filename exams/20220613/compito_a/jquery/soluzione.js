window.onload = function () {
    document.querySelector("form").style.display = "none";
    document.querySelector("span").style.display = "none";
    document.querySelectorAll("button")[1].style.display = "none";
    document.querySelectorAll("button")[0].addEventListener("click", function () {
        $.ajax({
            url: "../php/index.php",
            type: "GET",
            success: function (response) {
                const table = document.createElement("table");
                for (let i = 0; i < 9; i++) {
                    const row = $("<tr>");
                    for (let j = 0; j < 9; j++) {
                        const cell = $("<td>");
                        cell.text(response[i][j]);
                        row.append(cell);
                    }
                    table.append(row);
                }
                
            }
        });
    });
};