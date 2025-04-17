<?php
$conn = new mysqli("localhost", "root", "", "final");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

if (isset($_POST['delete']) && isset($_POST['string_id'])) {
    $id = (int)$_POST['string_id'];
    $conn->query("DELETE FROM string_info WHERE string_id = $id");
}
header("Location: showAll.php");
?>
