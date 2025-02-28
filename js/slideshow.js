document.addEventListener("DOMContentLoaded", function () {
    let slides = document.querySelectorAll(".slide");
    let index = 0;

    // Function to show the current slide with a smooth fade effect
    function showSlide(i) {
        slides.forEach((slide, idx) => {
            slide.style.display = idx === i ? "block" : "none";
            if (idx === i) {
                slide.classList.add("fade-in");
            } else {
                slide.classList.remove("fade-in");
            }
        });
    }

    // Function to go to the next slide
    function nextSlide() {
        index = (index + 1) % slides.length;
        showSlide(index);
    }

    showSlide(index);
    setInterval(nextSlide, 10000); // Change image every 10 seconds
});
