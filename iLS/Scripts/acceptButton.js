// acceptButton.js
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById('acceptButton').addEventListener('click', function(event) {
        // Add a class to body to indicate terms have been accepted
        document.body.classList.add('terms-accepted');
        // Hide the terms and conditions div
        document.getElementById('termsOfServiceContainer').style.display = 'none';
        // Scroll to the top of the page
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});
