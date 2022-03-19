let year = new Date().getFullYear();
let month = new Date().getMonth() + 1;
let diasMes = new Date(year, month, 0).getDate();
let positionDay = new Date().getDay();

let nameMonth = [
    "Enero",
    "Febrero",
    "Marzo",
    "Abril",
    "Mayo",
    "Junio",
    "Julio",
    "Agosto",
    "Septiembre",
    "Octubre",
    "Noviembre",
    "Diciembre"
]

function loadItemsCalendar(m) {
    document.getElementById("year").innerHTML = year;
    document.getElementById("nameMonth").innerHTML = nameMonth[Number(month - 1)];
    for (let index = 1; index < new Date(year, month - 1, 1).getDay(); index++) {
        let divPadding = document.createElement("div");
        divPadding.id = "padding" + index;
        document.getElementById("calendar").appendChild(divPadding);
    }
    for (let index = 1; index <= new Date(year, month, 0).getDate(); index++) {
        let div = document.createElement("div");
        div.id = year + "/" + m + "/" + index;
        document.getElementById("calendar").appendChild(div);

        div.addEventListener("click", (e) => {
            if (e.target.id == "not") {
                alert("Fecha no disponible");
            } else {
                document.getElementById('date').value = e.target.id;
                e.target.classList.add('bg-primary');
            }
        });
    }
}

function deleteItemsCalendar(m) {
    for (let index = 1; index < new Date(year, month - 1, 1).getDay(); index++) {
        document.getElementById("calendar").removeChild(document.getElementById("padding" + index));
    }

    for (let index = 1; index <= new Date(year, month, 0).getDate(); index++) {
        console.log(year + "/" + m + "/" + index);
        document.getElementById("calendar").removeChild(document.getElementById("not"));
        if (document.getElementById(year + "/" + m + "/" + index)) {
            document.getElementById("calendar").removeChild(document.getElementById(year + "/" + m + "/" + index));
        }
    }
}

function inner(m) {
    for (let index = 1; index <= new Date(year, month, 0).getDate(); index++) {
        let dateConver = new Date(year, m, index);
        var div = document.getElementById(year + "/" + m + "/" + index);
        div.innerHTML = index;
    }
}

function backMonth() {
    deleteItemsCalendar(month);
    month = month - 1;
    loadItemsCalendar(month);
    inner(month);
    blockDates();
    console.log(month);
}

function nextMonth() {
    deleteItemsCalendar(month);
    month = month + 1;
    loadItemsCalendar(month);
    inner(month);
    blockDates();
    console.log(month);
}

loadItemsCalendar(month);
inner(month);