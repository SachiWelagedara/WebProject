<?php
include 'connect.php';



$id = $_POST['id'];


$sql = "DELETE FROM items WHERE id = ?";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}


$stmt->bind_param("s", $id);



if (!$stmt->execute()) {
    die("Execute failed: " . $stmt->error);
    
}


if ($stmt->affected_rows > 0) {
    echo "Record deleted successfully";
  

} else {
    echo "No record was deleted. Please check if the ID exists.";
}

header("Location: admin.php");
exit();


$stmt->close();
$conn->close();
?>

