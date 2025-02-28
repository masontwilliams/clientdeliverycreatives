document.addEventListener("DOMContentLoaded", function () {
    let slides = document.querySelectorAll(".slide");
    let index = 0;

    function showSlide(i) {
        slides.forEach((slide, idx) => {
            slide.style.display = idx === i ? "block" : "none";
        });
    }

    function nextSlide() {
        index = (index + 1) % slides.length;
        showSlide(index);
    }

    showSlide(index);
    setInterval(nextSlide, 5000); // Change image every 5 seconds
});


