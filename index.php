<?php
require 'db.php';
$notes = mysqli_query($conn, "SELECT * FROM notes ORDER BY id DESC");
?>

<h2>All Notes</h2>
<ul>
<?php while($note = mysqli_fetch_assoc($notes)) { ?>
    <li><a href="view_note.php?id=<?= $note['id'] ?>"><?= $note['title'] ?></a></li>
<?php } ?>
</ul>

<a href="add_note.php">Add New Note</a>
