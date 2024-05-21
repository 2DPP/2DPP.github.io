
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById('acceptButton').addEventListener('click', function(event) {
        
        document.body.classList.add('terms-accepted');
 
        document.getElementById('termsOfServiceContainer').style.display = 'none';
        // Scroll to the top of the page
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});
