<?php
require 'vendor/autoload.php';

// Initialize message variable
$message = '';

// Check if the form has been submitted with a contact ID
if (isset($_POST['id'])) {
    $id = $_POST['id']; // Retrieve the contact ID from the form input

    // Connect to the database
    $pdo = connectToDatabase();

    // Prepare the SQL DELETE query
    $query = "DELETE FROM contacts WHERE id = :id";

    // Prepare the SQL statement
    $statement = $pdo->prepare($query);
    
    // Bind the contact ID parameter to the statement
    $statement->bindParam(':id', $id, PDO::PARAM_INT);
    
    // Execute the statement and check for success
    if ($statement->execute()) {
        $message = "Contact with ID $id has been successfully deleted."; // Success message
    } else {
        $message = "Failed to delete contact with ID $id."; // Error message
    }

    // Redirect to the index page after deletion
    // header('Location: index.php');
    // exit; // Stop further execution
}

// Include the view for deleting contacts
include 'views/delete.view.php';
?>

