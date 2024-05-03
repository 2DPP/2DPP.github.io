<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "dbconnect.php";

//  form data validator
if(isset($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['message'])) {
    // Prepare SQL statement to insert data into the database
    $stmt = $conn->prepare("INSERT INTO contacts (firstname, lastname, email, message) VALUES (?, ?, ?, ?)");

    
    $stmt->bind_param("ssss", $firstname, $lastname, $email, $message);

    // Get form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Execute SQL statement if succesful or not
    if ($stmt->execute()) {
        echo "Form submitted successfully!";
        // Output JavaScript to redirect to previous page
        echo "<script>window.history.go(-1);</script>";
    } else {
        echo "Error submitting form: " . $stmt->error;
    }
} else {
    echo "Form data is missing.";
}
?>
