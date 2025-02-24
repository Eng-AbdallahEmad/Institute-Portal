function startCountdown(endTime, elements) {
    setInterval(function () {
        var now = new Date().getTime();
        var distance = endTime - now;

        var hours = Math.floor(
            (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        hours = hours < 10 ? "0" + hours : hours;
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        elements.forEach(function (element) {
            element.textContent =
                seconds +
                " ثانية و " +
                minutes +
                " دقائق و " +
                hours +
                " ساعات";
        });

        if (distance < 0) {
            elements.forEach(function (element) {
                element.textContent = "انتهى الوقت";
            });
        }
    }, 1000);
}

window.onload = function () {
    var now = new Date();
    var todayDate =
        now.getDate() + "/" + (now.getMonth() + 1) + "/" + now.getFullYear();

    var rows = document.querySelectorAll("tbody tr");
    rows.forEach(function (row) {
        var dateCell = row.querySelector(".date_value").textContent.trim();
        var countdownElement = row.querySelector(".countdown");

        if (dateCell === todayDate) {
            var endTime = new Date(
                now.getFullYear(),
                now.getMonth(),
                now.getDate() + 1,
                0,
                0,
                0
            ).getTime();
            startCountdown(endTime, [countdownElement]);
        } else {
            countdownElement.textContent = "0 ثانية و 0 دقائق و 0 ساعات";
        }
    });
};

document.querySelectorAll(".show_btn").forEach((button) => {
    button.addEventListener("click", () => {
        let url = button.getAttribute("data-url");
        window.location.href = 'exams/' + url;
    });
});
