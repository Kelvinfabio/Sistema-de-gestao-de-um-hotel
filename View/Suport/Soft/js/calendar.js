document.addEventListener("DOMContentLoaded", function () {
    const currentDate = new Date();
    let currentMonth = currentDate.getMonth();
    let currentYear = currentDate.getFullYear();
    const calendarBody = document.getElementById("calendarBody");
    const currentMonthElement = document.getElementById("currentMonth");
    const prevMonthButton = document.getElementById("prevMonth");
    const nextMonthButton = document.getElementById("nextMonth");
    const eventDateInput = document.getElementById("eventDate");
    const eventDescriptionInput = document.getElementById("eventDescription");
    const addEventButton = document.getElementById("addEvent");

    // Initialize the calendar
    updateCalendar(currentYear, currentMonth);

    prevMonthButton.addEventListener("click", function () {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        updateCalendar(currentYear, currentMonth);
    });

    nextMonthButton.addEventListener("click", function () {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        updateCalendar(currentYear, currentMonth);
    });

    addEventButton.addEventListener("click", function () {
        const eventDate = eventDateInput.value;
        const eventDescription = eventDescriptionInput.value;
        if (eventDate && eventDescription) {
            // Implement adding events here, e.g., store them in an array or a database
            // Then, update the calendar to display the event
            updateCalendar(currentYear, currentMonth);
        }
    });

    function updateCalendar(year, month) {
        currentMonthElement.textContent = new Date(year, month, 1).toLocaleString("default", {
            month: "long",
            year: "numeric"
        });

        calendarBody.innerHTML = "";

        const firstDay = new Date(year, month, 1);
        const lastDay = new Date(year, month + 1, 0);

        for (let i = 0; i < firstDay.getDay(); i++) {
            calendarBody.innerHTML += "<td></td>";
        }

        for (let day = 1; day <= lastDay.getDate(); day++) {
            const date = new Date(year, month, day);
            const dayElement = document.createElement("td");
            dayElement.textContent = day;
            // You can add event data here if available
            // dayElement.dataset.date = date.toISOString();

            calendarBody.appendChild(dayElement);
        }
    }
});
