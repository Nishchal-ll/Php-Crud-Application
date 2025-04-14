<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-4">
<div class="container">
    <h2 class="text-center mb-4">Student Record List</h2>
    <a href="add.php">
    <button>Add Student</button>
</a>
<br>
<br>
    <?php
    $conn = new mysqli("localhost", "root", "", "crud");
    $result = $conn->query("SELECT * FROM students");
    echo "<table class='table table-bordered table-striped'>
        <thead class='table-primary'>
            <tr>
                <th>Name</th>
                <th>Roll No</th>
                <th>Marks</th>
                <th>Result</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['student_name']}</td>
            <td>{$row['roll_number']}</td>
            <td>{$row['marks_obtained']}</td>
            <td>{$row['result']}</td>
            <td>
                <a href='edit.php?id={$row['std_id']}' class='btn btn-success btn-sm'>Edit</a>
                <a href='delete.php?id={$row['std_id']}' class='btn btn-danger btn-sm'>Delete</a>
            </td>
        </tr>";
    }
    echo "</tbody></table>";
    ?>
</div>
</body>
</html>
