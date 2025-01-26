let slideIndex = 0;
showSlides();

function showSlides() {
    const slides = document.getElementsByClassName("slides");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    slides[slideIndex - 1].style.display = "block";  
}

// Change slide every 2 seconds (2000 milliseconds)
setInterval(showSlides, 2000); // Adjust the time as needed

function changeSlide(n) {
    slideIndex += n;
    const slides = document.getElementsByClassName("slides");
    if (slideIndex > slides.length) {slideIndex = 1}
    if (slideIndex < 1) {slideIndex = slides.length}
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slides[slideIndex - 1].style.display = "block";  
}

    // Countdown Timer
    function updateCountdown() {
        const eventDate = new Date("October 1, 2025 10:00:00").getTime();
        const now = new Date().getTime();
        const distance = eventDate - now;

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById('countdown').textContent = 
            `${days}d ${hours}h ${minutes}m ${seconds}s left until the event!`;

        if (distance < 0) {
            clearInterval(countdownFunction);
            document.getElementById('countdown').textContent = "Event has started!";
        }
    }

    // Update countdown immediately
    updateCountdown();

    // Update countdown every second
    const countdownFunction = setInterval(updateCountdown, 1000); // Update every second