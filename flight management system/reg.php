<?php
include 'connect.php';

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email already exists
    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);

    if ($result->num_rows > 0) {
        echo "Email Address Already Exists!";
    } else {
        // Insert new user into the database
        $insertQuery = "INSERT INTO users (username, email, password)
                        VALUES ('$username', '$email', '$password')";
        if ($conn->query($insertQuery) === TRUE) {
            header("location: home.php");
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>
