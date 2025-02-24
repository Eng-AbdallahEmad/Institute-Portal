// change the title "صباح الخير" or "مساء الخير"
document.addEventListener("DOMContentLoaded", function () {
    var greetingElement = document.querySelector(".hello");
    var now = new Date();
    var hours = now.getHours();

    if (hours < 12) {
        greetingElement.textContent = "صباح الخير";
    } else {
        greetingElement.textContent = "مساء الخير";
    }
});

// Script For Make A Date And Time To Interactive
document.addEventListener("DOMContentLoaded", (event) => {
    const dateElement = document.getElementById("current-date");
    const timeElement = document.getElementById("current-time");

    const updateDateTime = () => {
        const dateOptions = { year: "numeric", month: "long", day: "numeric" };
        const currentDate = new Date().toLocaleDateString("ar-EG", dateOptions);
        dateElement.textContent = `${currentDate}`;

        const timeOptions = {
            hour: "numeric",
            minute: "numeric",
            second: "numeric",
            hour12: true,
        };
        const currentTime = new Date().toLocaleTimeString("ar-EG", timeOptions);
        timeElement.textContent = `${currentTime}`;
    };

    updateDateTime();
    setInterval(updateDateTime, 1000); // تحديث الوقت كل ثانية
});