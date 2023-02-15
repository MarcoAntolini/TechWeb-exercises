const data = [
    {
        "id": 1,
        "name": "Bulbasaur",
        "type": [
            "Grass",
            "Poison"
        ]
    },
    {
        "id": 2,
        "name": "Ivysaur",
        "type": [
            "Grass",
            "Poison"
        ]
    },
    {
        "id": 3,
        "name": "Venusaur",
        "type": [
            "Grass",
            "Poison"
        ]
    },
    {
        "id": 4,
        "name": "Charmander",
        "type": [
            "Fire"
        ]
    },
    {
        "id": 5,
        "name": "Charmeleon",
        "type": [
            "Fire"
        ]
    },
    {
        "id": 6,
        "name": "Charizard",
        "type": [
            "Fire",
            "Flying"
        ]
    },
    {
        "id": 7,
        "name": "Squirtle",
        "type": [
            "Water"
        ]
    },
    {
        "id": 8,
        "name": "Wartortle",
        "type": [
            "Water"
        ]
    },
    {
        "id": 9,
        "name": "Blastoise",
        "type": [
            "Water"
        ]
    }
];

window.onload = function () {
    const button = document.querySelector("button");
    button.addEventListener("click", function () {
        generatePage();
    });
};

function generatePage() {
    const main = document.querySelector("main");
    let content = '';
    data.forEach(element => {
        let div = `
            <div>
                <ul>
                    <li>${element.id}</li>
                    <li>${element.name}</li>
                    <li>${element.type}</li>
                </ul>
                <button id="up">Up</button>
                <button id="down">Down</button>
            </div>
        `;
        content += div;
    });
    main.innerHTML = content;
    buttonsUp = document.querySelectorAll("#up");
    buttonsDown = document.querySelectorAll("#down");
    buttonsUp.forEach(buttonUp => buttonUp.addEventListener("click", function () {
        let div = buttonUp.parentNode;
        if (div.previousElementSibling) {
            div.parentNode.insertBefore(div, div.previousElementSibling);
        }
    }));
    buttonsDown.forEach(buttonDown => buttonDown.addEventListener("click", function () {
        let div = this.parentNode;
        if (div.nextElementSibling) {
            div.parentNode.insertBefore(div.nextElementSibling, div);
        }
    }));
}