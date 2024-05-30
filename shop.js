document.addEventListener("DOMContentLoaded", function() {
    const searchIcon = document.querySelector(".search-icon");
    const searchForm = document.getElementById("search-box");
    const searchInput = document.querySelector(".search-input");
    const productCards = document.querySelectorAll(".pro");
    const productSection = document.getElementById("product1");
    const searchContainer = document.querySelector(".search-container");

    // Create a message element for displaying the "not available" message
    const notAvailableMessageElement = document.createElement("div");
    notAvailableMessageElement.textContent = "Your search term is not available.";
    notAvailableMessageElement.id = "not-available-message";
    notAvailableMessageElement.style.display = "none";
    notAvailableMessageElement.style.textAlign = "center";
    notAvailableMessageElement.style.marginTop = "20px";
    notAvailableMessageElement.style.color = "#000000"; // Set color to black
    searchContainer.parentElement.insertBefore(notAvailableMessageElement, searchContainer);

    // Smooth scroll to product section when the icon is clicked
    searchIcon.addEventListener("click", function(event) {
        event.preventDefault();
        productSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
        searchInput.focus();  // Optional: Focus on the search input when the icon is clicked
    });

    // Event listener for form submission
    searchForm.addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the form from submitting
        const searchTerm = searchInput.value.trim().toLowerCase();
        filterProducts(searchTerm);
        if (searchTerm !== "") {
            productSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });

    // Event listener for input changes
    searchInput.addEventListener("input", function() {
        const searchTerm = searchInput.value.trim().toLowerCase();
        if (searchTerm === "") {
            // Reset product cards to their original state
            productCards.forEach(function(card) {
                card.style.display = "block";
            });
            // Hide the "not available" message if it's visible
            notAvailableMessageElement.style.display = "none";
        }
    });

    // Function to filter products based on search term
    function filterProducts(searchTerm) {
        let hasVisibleProducts = false;

        productCards.forEach(function(card) {
            const productName = card.querySelector(".des h5").innerText.toLowerCase();
            if (productName.includes(searchTerm)) {
                card.style.display = "block";
                hasVisibleProducts = true;
            } else {
                card.style.display = "none";
            }
        });

        if (hasVisibleProducts) {
            notAvailableMessageElement.style.display = "none";
        } else {
            notAvailableMessageElement.style.display = "block";
            notAvailableMessageElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }
});

document.addEventListener('DOMContentLoaded', (event) => {
    // Clear localStorage when the page loads to reset the cart
    localStorage.clear();

    // Initial call to set the cart count to 0 when the page loads
    updateCartCount();
});

function updateCartCount() {
    let itemsStringify = localStorage.getItem('cartItems') || '[]';
    let items = JSON.parse(itemsStringify);
    document.getElementById('cart-count').innerHTML = items.length;
}

function addtoCart(e) {
    console.log(e);
    let item = {
        name: e.getAttribute("data-name"),
        price: e.getAttribute("data-price"),
        img: e.getAttribute("data-img")
    };

    let itemsStringify = localStorage.getItem('cartItems') || '[]';
    let items = JSON.parse(itemsStringify);
    items.push(item);
    localStorage.setItem('cartItems', JSON.stringify(items));
    updateCartCount();
}

// Example usage: This would be dynamically added in your actual product list
// Assuming there's a button with class 'addtoCart-btn' and relevant data attributes
document.querySelectorAll('.addtoCart-btn').forEach(button => {
    button.addEventListener('click', function() {
        addtoCart(this);
    });
});

