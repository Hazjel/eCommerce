let searchForm = document.querySelector(".search-form");

document.querySelector("#search-btn").onclick = () => {
  searchForm.classList.toggle("active");
  shoppingCart.classList.remove("active");
  loginForm.classList.remove("active");
  navbar.classList.remove("active");
};

let shoppingCart = document.querySelector(".shopping-cart");

document.querySelector("#cart-btn").onclick = () => {
  shoppingCart.classList.toggle("active");
  searchForm.classList.remove("active");
  loginForm.classList.remove("active");
  navbar.classList.remove("active");
};

let loginForm = document.querySelector(".login-form");

document.querySelector("#login-btn").onclick = () => {
  loginForm.classList.toggle("active");
  searchForm.classList.remove("active");
  shoppingCart.classList.remove("active");
  navbar.classList.remove("active");
};

let navbar = document.querySelector(".navbar");

document.querySelector("#menu-btn").onclick = () => {
  navbar.classList.toggle("active");
  searchForm.classList.remove("active");
  shoppingCart.classList.remove("active");
  loginForm.classList.remove("active");
};

window.onscroll = () => {
  searchForm.classList.remove("active");
  shoppingCart.classList.remove("active");
  loginForm.classList.remove("active");
  navbar.classList.remove("active");
};

var swiper = new Swiper(".product-slider", {
  loop: true,
  spaceBetween: 20,
  autoplay: {
    delay: 7500,
    disableOnInteraction: false,
  },

  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1020: {
      slidesPerView: 3,
    },
    1200: {
      slidesPerView: 4,
    },
  },
});

var swiper = new Swiper(".review-slider", {
  loop: true,
  spaceBetween: 20,
  autoplay: {
    delay: 7500,
    disableOnInteraction: false,
  },

  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1020: {
      slidesPerView: 3,
    },
    1200: {
      slidesPerView: 4,
    },
  },
});

document.addEventListener("DOMContentLoaded", function () {
  fetch("data/data.json")
    .then((response) => {
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      return response.json();
    })
    .then((data) => {
      const boxContainer = document.getElementById("boxContainer");
      boxContainer.innerHTML = ""; // Clear existing content if any

      data.productCategories.forEach((category) => {
        const boxDiv = document.createElement("div");
        boxDiv.className = "box"; // Add the class for styling

        // Create and append the image element
        const img = document.createElement("img");
        img.src = `${category.image}`; // Update this if using dynamic images
        img.alt = `${category.name} Image`;
        boxDiv.appendChild(img);

        // Create and append the heading element
        const heading = document.createElement("h3");
        heading.textContent = category.name;
        boxDiv.appendChild(heading);

        // Create and append the link element
        const link = document.createElement("a");
        link.href = `${category.link}`;
        link.className = "btn"; // Add class for styling
        link.textContent = "Explore";
        boxDiv.appendChild(link);

        // Append the new box to the container
        boxContainer.appendChild(boxDiv);
      });
    })
    .catch((error) => console.error("Error fetching data:", error));
});
