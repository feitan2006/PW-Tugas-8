<?php
require_once "database.php";

$result = $conn->query("SELECT * FROM game");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Game Library</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>

<div class="container">

    <h1>Game Library</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Genre</th>
            <th>Platform</th>
            <th>Developer</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()) : ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['title'] ?></td>
            <td><?= $row['genre'] ?></td>
            <td><?= $row['platform'] ?></td>
            <td><?= $row['developer'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

</div>

</body>
</html>