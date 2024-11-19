    
     document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault(); 
        
       
        const username = document.getElementById('uname').value;
        const password = document.getElementById('psw').value;

       
        if (username === "Toodie2D" && password === "admin123") {
            alert("Login successful!");
           
            window.location.href = "home.html"; 
        } else {
            alert("Invalid username or password!");
        }
    });