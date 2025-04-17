<?php include '../includes/header.php'; ?>
<h2>All Messages</h2>

<form method="POST" action="delete.php">
    <input type="number" name="string_id" placeholder="Enter ID to delete" required>
    <button type="submit" name="delete">Delete</button>
</form>

<hr>

<?php
$conn = new mysqli("localhost", "root", "", "final");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$result = $conn->query("SELECT * FROM string_info");
while ($row = $result->fetch_assoc()) {
    echo "<div><strong>ID:</strong> " . $row["string_id"] . " — <strong>Message:</strong> " . $row["message"] . "</div>";
}
?>

</body>
</html>
