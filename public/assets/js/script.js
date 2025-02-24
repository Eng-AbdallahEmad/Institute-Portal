// Script For Screen loading
window.addEventListener("load", function () {
    var loadingScreen = document.querySelector(".loader_class");
    setTimeout(function () {
        loadingScreen.style.opacity = "0"; // Set opacity to 0 to trigger fade-out
    }, 1500); // Adjust the duration as needed

    // After the fade-out transition, hide the loading screen completely
    setTimeout(function () {
        loadingScreen.style.display = "none";
    }, 2000); // This delay should be longer than your fade-out transition duration
});

// The Profile Showing
const profile = document.querySelector(".profile");
const dropdown = document.querySelector(".dropdown__wrapper");

profile.addEventListener("click", () => {
    dropdown.classList.remove("none");
    dropdown.classList.toggle("hide");
});

document.addEventListener("click", (event) => {
    const isClickInsideDropdown = dropdown.contains(event.target);
    const isProfileClicked = profile.contains(event.target);

    if (!isClickInsideDropdown && !isProfileClicked) {
        dropdown.classList.add("hide");
        dropdown.classList.add("dropdown__wrapper--fade-in");
    }
});

document.addEventListener("DOMContentLoaded", () => {
    const searchIcon = document.getElementById("searchIcon");
    const popupSearch = document.getElementById("popupSearch");
    const closePopup = document.getElementById("closePopup");

    // Show popup when search icon is clicked
    searchIcon.addEventListener("click", () => {
        popupSearch.classList.add("show");
    });

    // Close popup when close button is clicked
    closePopup.addEventListener("click", () => {
        popupSearch.classList.remove("show");
    });

    // Close popup when clicking outside of the popup
    window.addEventListener("click", (event) => {
        if (event.target === popupSearch) {
            popupSearch.classList.remove("show");
        }
    });
});

// Closing And Opening sidebar - Change The width
const body = document.querySelector("body");
const sidebar = document.querySelector(".sidebar");
const content = document.querySelector(".content");
const submenuItems = document.querySelectorAll(".submenu_item");
const sidebarOpen = document.querySelector("#sidebarOpen");
const sidebarClose = document.querySelector(".collapse_sidebar");
const sidebarExpand = document.querySelector(".expand_sidebar");

sidebarOpen.addEventListener("click", () => sidebar.classList.toggle("close"));

sidebarClose.addEventListener("click", () => {
    sidebar.classList.add("close", "hoverable");
});
sidebarExpand.addEventListener("click", () => {
    sidebar.classList.remove("close", "hoverable");
});

sidebar.addEventListener("mouseenter", () => {
    if (sidebar.classList.contains("hoverable")) {
        sidebar.classList.remove("close");
        content.classList.add("back");
    }
});
sidebar.addEventListener("mouseleave", () => {
    if (sidebar.classList.contains("hoverable")) {
        sidebar.classList.add("close");
        content.classList.remove("back");
    }
});

submenuItems.forEach((item, index) => {
    item.addEventListener("click", () => {
        item.classList.toggle("show_submenu");
        submenuItems.forEach((item2, index2) => {
            if (index !== index2) {
                item2.classList.remove("show_submenu");
            }
        });
    });
});

if (window.innerWidth < 768) {
    sidebar.classList.add("close");
} else {
    sidebar.classList.remove("close");
}

// The Scrolling Text
document.addEventListener("DOMContentLoaded", function () {
    const sublinks = document.querySelectorAll(".nav_link.sublink p");

    sublinks.forEach((sublink) => {
        const textLength = sublink.textContent.trim().length;

        if (textLength > 25) {
            const animationDuration = textLength / 5 + "s"; // Calculate animation duration based on text length
            const translateValue = (textLength / 25) * 12; // Calculate translate value based on text length

            const keyframes = `
                @keyframes marquee-${textLength} {
                    0%, 100% {
                        transform: translateX(0);
                    }
                    25%, 35% {
                        transform: translateX(${translateValue}%);
                    }
                    55% {
                        transform: translateX(0);
                    }
                    75% {
                        transform: translateX(-${translateValue}%);
                    }
                }
            `;

            // Create a new style element
            const styleSheet = document.createElement("style");
            styleSheet.type = "text/css";
            styleSheet.innerHTML = keyframes;
            document.head.appendChild(styleSheet);

            sublink.style.setProperty(
                "--animation-duration",
                animationDuration
            );
            sublink.style.setProperty(
                "--animation-name",
                `marquee-${textLength}`
            );
            sublink.classList.add("active");
        }
    });
});

//Scroll reveal animations
//Common reveal options to create reveal animations
ScrollReveal({
    reset: false,
    distance: "60px",
    duration: 2500,
    delay: 100,
});

//Target elements, and specify options to create reveal animations

ScrollReveal().reveal(".logo_item", {
    delay: 1650,
    origin: "top",
});

ScrollReveal().reveal(".search_bar, .btnHome_exModule", {
    delay: 2000,
    origin: "top",
    interval: 200,
});

ScrollReveal().reveal(".navbar_content", {
    delay: 2500,
    origin: "top",
    interval: 200,
});

ScrollReveal().reveal(".item, .menu_title", {
    delay: 2500,
    origin: "right",
});

ScrollReveal().reveal("#exam_list, #book_list", {
    delay: 3000,
    origin: "right",
});

ScrollReveal().reveal(".icons_control, .content-title, .top_content, .container-card", {
    delay: 3000,
    origin: "top",
    interval: 200,
});

ScrollReveal().reveal(".bg-pattern", {
    delay: 3500,
    origin: "bottom",
});

// ================================== //