// PRELOADER
$(window).load(function () {
    $('.preloader').delay(1000).fadeOut("slow"); // set duration in brackets    
});



// WOW ANIMATED 
$(function () {
    new WOW().init();
})
// Set the target date and time for the countdown
const targetDate = new Date("Apr 4, 2024 18:33:00").getTime();

// Update the countdown every second
const countdownInterval = setInterval(() => {
    // Get the current date and time
    const now = new Date().getTime();

    // Calculate the time difference between the current date/time and the target date/time
    const timeDifference = targetDate - now;

    // Calculate days, hours, minutes, and seconds
    const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
    const hours = Math.floor(
        (timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

    // Display the calculated time in the HTML elements

    document.getElementById("hours-fix").textContent = hours;
    document.getElementById("minutes-fix").textContent = minutes;
    document.getElementById("seconds-fix").textContent = seconds;

    // Check if the countdown has expired
    if (timeDifference < 0) {
        clearInterval(countdownInterval);
        document.getElementById("timer").innerHTML = "Countdown expired";
    }
}, 1000);