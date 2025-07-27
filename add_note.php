<?php
require 'db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    mysqli_query($conn, "INSERT INTO notes (title, content) VALUES ('$title', '$content')");
    header("Location: index.php");
}
?>

<form method="post">
    <input type="text" name="title" placeholder="Note Title" required>
    <textarea name="content" placeholder="Write markdown..." required></textarea>
    <button type="submit">Save</button>
</form>
