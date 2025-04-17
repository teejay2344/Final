<?php
$conn = new mysqli("localhost", "root", "", "final");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

if (isset($_POST['message'])) {
    $message = $conn->real_escape_string($_POST['message']);
    $conn->query("INSERT INTO string_info (message) VALUES ('$message')");
}
header("Location: ../index.php");
?>
