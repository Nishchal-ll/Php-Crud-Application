<?php
$conn = new mysqli("localhost", "root", "", "crud");
$id = $_GET['id'];

$conn->query("DELETE FROM students WHERE std_id=$id");

header("Location: display.php");
?>
