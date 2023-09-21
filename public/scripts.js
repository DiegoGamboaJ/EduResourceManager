window.addEventListener("load", () => {
    const element = document.querySelector(".close-alert");
    element &&
        element.addEventListener("click", (e) => {
            const button = e.currentTarget;
            button.closest(".alert-container").remove();
        });

    var showPassword = document.getElementById("show-password");
    var password = document.querySelector(".password");

    showPassword &&
        showPassword.addEventListener("click", function (e) {
            e.preventDefault();
            if (password.classList.contains("text-transparent")) {
                password.textContent = password.dataset.password;
                password.classList.remove("text-transparent");
                showPassword.textContent = "Ocultar contraseña";
            } else {
                password.textContent = "*********";
                password.classList.add("text-transparent");
                showPassword.textContent = "Mostrar contraseña";
            }
        });
});

let inputReservations = document.getElementById("reservations");

let reservations = JSON.parse(inputReservations.value);
console.log(reservations);

let ec = new EventCalendar(document.getElementById("calendar"), {
    view: "timeGridWeek",
    events: [
        // your list of events
    ],
    slotMinTime: "07:45:00",
    slotMaxTime: "18:00:00",

    // allDayContent: function(arg){
    //     return {html: '<p>Hola</p>'}
    // }

    allDaySlot: false,

    // buttonText: function(texts){
    //     return {today: 'Hoy'}
    // }

    firstDay: 1,

    hiddenDays: [0, 6],

    nowIndicator: true,

    slotDuration: "0:15:00",

    eventStartEditable: false,

    eventDurationEditable: false,

    // slotHeight: 50,
});

reservations.forEach(reservation => {
    ec.addEvent({
        title: reservation.grade.name,
        start: reservation.date + ' ' + reservation.block.start_time,
        end: reservation.date + ' ' + reservation.block.end_time,
        resourceIds: [reservation.id],
    });
});

