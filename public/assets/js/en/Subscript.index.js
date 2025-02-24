document.addEventListener("DOMContentLoaded", function () {
    var greetingElement = document.querySelector(".hello");
    var now = new Date();
    var hours = now.getHours();

    if (hours < 12) {
        greetingElement.textContent = "Good Morning";
    } else {
        greetingElement.textContent = "Good Evening";
    }
});

document.addEventListener("DOMContentLoaded", (event) => {
    const dateElement = document.getElementById("current-date");
    const timeElement = document.getElementById("current-time");

    const updateDateTime = () => {
        const dateOptions = { year: "numeric", month: "long", day: "numeric" };
        const currentDate = new Date().toLocaleDateString("en-US", dateOptions);
        dateElement.textContent = `${currentDate}`;

        const timeOptions = {
            hour: "numeric",
            minute: "numeric",
            second: "numeric",
            hour12: true,
        };
        const currentTime = new Date().toLocaleTimeString("en-US", timeOptions);
        timeElement.textContent = `${currentTime}`;
    };

    updateDateTime();
    setInterval(updateDateTime, 1000); // Update every second
});