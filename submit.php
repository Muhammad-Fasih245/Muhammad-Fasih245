<?php
// Connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from HTML form
$studentName = $_POST['studentName'];
$subject = $_POST['subject'];
$grade = $_POST['grade'];
$semester = $_POST['semester'];

// Prepare and insert into database
$sql = "INSERT INTO grades (student_name, subject, grade, semester) 
        VALUES ('$studentName', '$subject', '$grade', '$semester')";

if ($conn->query($sql) === TRUE) {
    echo "Grade successfully added.";
    echo "<br><a href='S G T.html'>Go back</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
