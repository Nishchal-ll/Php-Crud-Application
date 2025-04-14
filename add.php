<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>
<h2>Add New Student</h2>
<form method="post">
    Student Name: <input type="text" name="student_name" required><br><br>
    Roll Number: <input type="text" name="roll_number" required><br><br>
    Marks Obtained: <input type="number" name="marks_obtained" required><br><br>
    <input type="submit" value="Add Student">
</form>
<?php
$conn = new mysqli("localhost", "root", "", "crud");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['student_name'];
    $roll = $_POST['roll_number'];
    $marks = $_POST['marks_obtained'];
    $result = ($marks >= 50) ? 'Pass' : 'Fail';

    $sql = "INSERT INTO students (student_name, roll_number, marks_obtained, result)
            VALUES ('$name', '$roll', '$marks', '$result')";
    if ($conn->query($sql) === TRUE) {
        echo "<p>Student added successfully.</p>";
        header("Location: display.php");
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }
}
?>

</body>
</html>
