function validation_r() {
    //alert("validation");
}

validation_r.prototype.listener = () => {
    //this.dates_r.hidden = false;
    let dates_r = document.getElementById('dates_r'),
        calendar = document.getElementById('calendar_r'),
        select_dates = document.getElementById('next2'),
        select_hour = document.getElementById('selectModal'),
        menus_r = document.getElementById('menus_r');


    select_hour.addEventListener('click', () => {
        dates_r.hidden = false;
        location.href = "#dates_r";
    });

    select_dates.addEventListener('click', () => {
        menus_r.hidden = false;
        location.href = "#menus_r";
    });
}

let init = new validation_r();
init.listener();