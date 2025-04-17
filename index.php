<?php include 'includes/header.php'; ?>
<div class="container">
<h2>Submit a Message</h2>
<form method="POST" action="php/insert.php">
    <input type="text" name="message" placeholder="Enter a message" required>
    <button type="submit">Submit</button>
</form>

<br>
<a href="php/showAll.php">Show all records</a>
</div>
</body>
</html>
