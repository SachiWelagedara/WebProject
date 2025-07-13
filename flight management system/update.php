<?php
include 'connect.php'; // Connect to the database

// Get POST data
$id = $_POST['id'];
$name = $_POST['name'];
$brand = $_POST['brand'];
$type = $_POST['type'];
$availability = $_POST['availability'];


$sql = "UPDATE items SET name = ?, brand = ?, type = ?, availability = ? WHERE id = ?";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    
    die("Prepare failed: " . $conn->error);
}


$stmt->bind_param("sssss", $name, $brand, $type, $availability, $id);

if (!$stmt->execute()) {
    
    die("Execute failed: " . $stmt->error);
}


if ($stmt->affected_rows > 0) {
    echo "Record updated successfully";
} else {
    echo "No record was updated. Please check if the ID exists and the data is correct.";
}


header("Location: admin.php");
exit();


$stmt->close();
$conn->close();
?>
