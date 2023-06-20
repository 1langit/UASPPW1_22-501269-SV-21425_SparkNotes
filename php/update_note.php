<?php
// Connect to the database
include 'connect.php';

// Get note data from the POST request
$noteId = $_POST['id'];
$noteTitle = $_POST['title'];
$noteContent = $_POST['content'];

// Update the note in the database
$sql = "UPDATE notes SET title='$noteTitle', content='$noteContent' WHERE id=$noteId";
$conn->query($sql);

$conn->close();
?>
