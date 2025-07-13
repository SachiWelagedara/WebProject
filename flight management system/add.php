<?php
include 'connect.php';

if (isset($_POST['signup'])) {
    $id = $_POST['id']; // Fetch ID from the form
    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $type = $_POST['type'];
    $availability = isset($_POST['availability']) ? 'Yes' : 'No';

    // Check for duplicate entries based on the 'id' field
    $checkQuery = "SELECT * FROM items WHERE id='$id'";
    $result = $conn->query($checkQuery);

    if ($result->num_rows > 0) {
        echo "Item ID Already Exists!";
    } else {
        // Insert data into the 'items' table
        $insertQuery = "INSERT INTO items (id, name, brand, type, availability) 
                        VALUES ('$id', '$name', '$brand', '$type', '$availability')";

        if ($conn->query($insertQuery) === TRUE) {
            header("location: admin.php"); // Redirect to home page on successful registration
        } else {
            echo "Error: " . $conn->error; // Display error message
        }
    }
}
?>
