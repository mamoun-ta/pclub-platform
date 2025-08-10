document.addEventListener("DOMContentLoaded", function () {
    let startButton = document.getElementById("start-button");
    if (startButton) {
        startButton.addEventListener("click", function () {
            let exploreSection = document.getElementById("explore-platform");
            if (exploreSection) {
                exploreSection.scrollIntoView({ behavior: "smooth" });
            } else {
                console.error("'explore-platform' section not found.");
            }
        });
    } else {
        console.error("'start-button' not found.");
    }
});
