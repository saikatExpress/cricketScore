function toggleContent(section) {
    var content = document.getElementById(section + "Content");
    var arrowIcon = document.getElementById(section + "Arrow");

    // Check if the selected content is currently displayed
    if (content.classList.contains("show")) {
        content.classList.remove("show"); // Hide the content with animation
        arrowIcon.classList.remove("fa-arrow-down"); // Remove down arrow
        arrowIcon.classList.add("fa-arrow-right"); // Add right arrow
    } else {
        // Hide all content sections first
        var allContent = document.querySelectorAll(".content");
        var allArrowIcons = document.querySelectorAll('[id$="Arrow"]');

        allContent.forEach(function (item) {
            item.classList.remove("show");
        });

        // Reset all arrow icons to right arrow
        allArrowIcons.forEach(function (icon) {
            icon.classList.remove("fa-arrow-down");
            icon.classList.add("fa-arrow-right");
        });

        // Show the selected content with animation
        content.classList.add("show");
        arrowIcon.classList.remove("fa-arrow-right"); // Remove right arrow
        arrowIcon.classList.add("fa-arrow-down"); // Add down arrow
    }
}

// Onload Advertisement code
document.addEventListener("DOMContentLoaded", function () {
    var addDiv = document.getElementById("addDiv");
    var closeBtn = document.getElementById("closeBtn");

    // Delay showing the addDiv by 30 seconds
    setTimeout(function () {
        addDiv.style.display = "block";
    }, 10000); // 30 seconds in milliseconds

    closeBtn.addEventListener("click", function () {
        addDiv.style.display = "none";
    });
});
