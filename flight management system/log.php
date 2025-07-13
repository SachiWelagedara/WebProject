<?php
include 'connect.php'; // Ensure your database connection is correct

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize user inputs
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    // Check for empty fields
    if (empty($email) || empty($password)) {
        echo "Please fill in both email and password.";
        exit;
    }

    // Check if the database connection is successful
    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    // Use a prepared statement to safely query the database
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    if (!$stmt) {
        die("Database error: " . $conn->error);
    }

    $stmt->bind_param("s", $email); // "s" indicates string type
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the user exists
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['username'] = $user['name']; // Using 'name' from the table
            header("Location: admin.php");
            exit;
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No account found with that email.";
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
