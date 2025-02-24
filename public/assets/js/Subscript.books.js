document.querySelectorAll(".show_btn").forEach((button) => {
    button.addEventListener("click", () => {
        let url = button.getAttribute("data-url");
        window.location.href = url;
    });
});
