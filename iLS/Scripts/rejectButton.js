// rejectButton.js

document.addEventListener("DOMContentLoaded", function () {
    document.getElementById('rejectButton').addEventListener('click', function(event) {
        // Redirect the user to another page upon rejection
        window.location.href = "\Reject.html";
    });
});
