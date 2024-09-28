<?php
require 'vendor/autoload.php';

// Initialize message variable
$message = '';

// Check if the form has been submitted
if (isset($_POST['name'])) {
    // Retrieve form input values
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone']; // Ensure this matches the input name in the form

    // Connect to the database
    $pdo = connectToDatabase();

    // Prepare the SQL INSERT query (ensure the column names are correct)
    $query = "INSERT INTO contacts (name, email, phone) VALUES (:name, :email, :phone)";

    // Prepare the SQL statement
    $statement = $pdo->prepare($query);
    
    // Bind parameters
    $statement->bindParam(':name', $name);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':phone', $phone);
    
    // Execute the prepared statement
    if ($statement->execute()) {
        $message = "Contact '$name' has been successfully added."; // Success message
    } else {
        $message = "Failed to add contact."; // Error message
    }
}

// Include the view for adding contacts
include 'views/add.view.php';
?>




