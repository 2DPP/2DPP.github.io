document.getElementById('contactForm').addEventListener('submit', function(event) {
    // Prevent the default form submission behavior
    event.preventDefault();

    // Client-side validation
    var valid = true;

    // Validate first name
    var fname = document.getElementById('fname').value;
    if (fname.trim() === '') {
        document.getElementById('fnameError').innerText = 'First name is required';
        valid = false;
    } else {
        document.getElementById('fnameError').innerText = '';
    }

    // Validate last name
    var lname = document.getElementById('lname').value;
    if (lname.trim() === '') {
        document.getElementById('lnameError').innerText = 'Last name is required';
        valid = false;
    } else {
        document.getElementById('lnameError').innerText = '';
    }

    // Validate email
    var email = document.getElementById('email').value;
    if (!/\S+@\S+\.\S+/.test(email)) {
        document.getElementById('emailError').innerText = 'Enter a valid email address';
        valid = false;
    } else {
        document.getElementById('emailError').innerText = '';
    }

    // Validate message
    var message = document.getElementById('message').value;
    if (message.trim() === '') {
        document.getElementById('messageError').innerText = 'Message is required';
        valid = false;
    } else {
        document.getElementById('messageError').innerText = '';
    }

    // If all fields are valid, submit the form
    if (valid) {
        // Example of asynchronous form submission using Fetch API
        var formData = new FormData(this);

        fetch('Includes/process_form.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text();
        })
        .then(data => {
            // Handle the response from the server
            console.log(data);
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
    }
});
