<?php
$conn = new mysqli("localhost", "root", "", "crud");
$id = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marks = $_POST['marks'];
    $result = $marks >= 50 ? 'Pass' : 'Fail';
    $conn->query("UPDATE students SET marks_obtained=$marks, result='$result' WHERE std_id=$id");
    header("Location: display.php"); 
}
$res = $conn->query("SELECT * FROM students WHERE std_id=$id");
$row = $res->fetch_assoc();
?>

<form method="post">
    New Marks: <input type="number" name="marks" value="<?php echo $row['marks_obtained']; ?>">
    <input type="submit" value="Update">
</form>
