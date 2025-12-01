<?php
include 'database.php';

$title     = $_POST['title'];
$genre     = $_POST['genre'];
$platform  = $_POST['platform'];
$developer = $_POST['developer'];

$sql = "INSERT INTO games (title, genre, platform, developer)
        VALUES ('$title', '$genre', '$platform', '$developer')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $conn->error;
}
?>