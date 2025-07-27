<?php
require 'db.php';
require 'markdown/Parsedown.php';

$id = $_GET['id'];
$note = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM notes WHERE id=$id"));

$Parsedown = new Parsedown();
?>

<h1><?= $note['title'] ?></h1>
<div><?= $Parsedown->text($note['content']); ?></div>
<a href="index.php">Back</a>