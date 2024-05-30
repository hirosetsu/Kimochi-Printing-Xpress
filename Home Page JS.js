const daysEl = document.getElementById("days");
const hoursEl = document.getElementById("hours");
const minsEl = document.getElementById("mins");
const secondsEl = document.getElementById("seconds");

const newYears = "16 June 2024";

function countdown() {
    const newYearsDate = new Date(newYears);
    const currentDate = new Date();

    const totalSeconds = (newYearsDate - currentDate) / 1000;

    const days = Math.floor(totalSeconds / 3600 / 24);
    const hours = Math.floor(totalSeconds / 3600) % 24;
    const mins = Math.floor(totalSeconds / 60) % 60;
    const seconds = Math.floor(totalSeconds) % 60;

    daysEl.innerHTML = days;
    hoursEl.innerHTML = formatTime(hours);
    minsEl.innerHTML = formatTime(mins);
    secondsEl.innerHTML = formatTime(seconds);
}

function formatTime(time) {
    return time < 10 ? `0${time}` : time;
}

// initial call
countdown();

setInterval(countdown, 1000);

//search

document.addEventListener("DOMContentLoaded", function() {
    const searchForm = document.querySelector(".search-box");
    const searchInput = document.querySelector(".search-input");
    const productBoxes = document.querySelectorAll(".product-box");
    const popularSection = document.getElementById("popular-product");

    // Create a message element for displaying the "not available" message
    const notAvailableMessageElement = document.createElement("div");
    notAvailableMessageElement.textContent = "Your search term is not available.";
    notAvailableMessageElement.classList.add("not-available-message");
    document.body.appendChild(notAvailableMessageElement);

    // Hide the "not available" message by default
    notAvailableMessageElement.style.display = "none";

    // Function to scroll to the first visible product box or "not available" message
    function scrollToFirstVisibleBox() {
        const firstVisibleProductBox = document.querySelector(".product-box:not(.hide)");
        if (firstVisibleProductBox) {
            firstVisibleProductBox.scrollIntoView({ behavior: 'smooth', block: 'start' });
        } else {
            // Scroll to the "not available" message if no products found
            notAvailableMessageElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }

    // Event listener for form submission
    searchForm.addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the form from submitting
        const searchTerm = searchInput.value.trim().toLowerCase();
        filterProducts(searchTerm);
        scrollToFirstVisibleBox(); // Scroll after filtering
        popularSection.scrollIntoView({ behavior: 'smooth' }); // Scroll to popular section
    });

    // Event listener for search input change
    searchInput.addEventListener("input", function() {
        const searchTerm = searchInput.value.trim().toLowerCase();
        if (searchTerm === "") {
            // Reset product boxes to their original state
            productBoxes.forEach(function(box) {
                box.style.display = "block";
            });
            // Hide the "not available" message if it's visible
            notAvailableMessageElement.style.display = "none";
        }
    });

    // Function to filter products based on search term
    function filterProducts(searchTerm) {
        productBoxes.forEach(function(box) {
            const productName = box.querySelector("strong").innerText.toLowerCase();
            if (productName.includes(searchTerm)) {
                // Show the product box
                box.style.display = "block";
            } else {
                // Hide the product box
                box.style.display = "none";
            }
        });
    }
});
