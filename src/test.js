document.addEventListener("DOMContentLoaded", function () {
  const produceListingsContainer = document.getElementById("listings");

  if (produceListingsContainer) {
    // Make an AJAX request to fetch data from the PHP script
    fetch("test.php")
      .then((response) => response.json())
      .then((data) => {
        // Process the fetched data and display it
        data.forEach((listing) => {
          const listingElement = document.createElement("div");
          listingElement.classList.add("produce");
          listingElement.innerHTML = `
            <img
              src="https://dummyimage.com/250x250/d4acd4/000000"
              alt="produce image"
            />
            <h2>${listing.name}</h2>
            <p>${listing.quantity}KG</p>
            <p>₹${listing.price}</p>
            <div class="buttons">
            <a href="javascript:void(0)" class="btn primary-btn-outline"> Buy Now </a>
            <a href="javascript:void(0)" class="btn primary-btn-outline"> add to cart </a>
            </div>
          `;
          produceListingsContainer.appendChild(listingElement);
        });
      })
      .catch((error) => {
        console.error("Error fetching produce listings:", error);
      });
  } else {
    console.error("Element with id 'produce-grid' not found.");
  }
});
