<?php include 'database.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Game</title>
</head>
<body>

<h2>Add New Game</h2>

<form action="insert.php" method="POST">
    <label>Title:</label><br>
    <input type="text" name="title" required><br><br>

    <label>Genre:</label><br>
    <input type="text" name="genre" required><br><br>

    <label>Platform:</label><br>
    <input type="text" name="platform" required><br><br>

    <label>Developer:</label><br>
    <input type="text" name="developer" required><br><br>

    <button type="submit">Save</button>
</form>

</body>
</html>