<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bright_boost";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$studentID = $_GET['studentID'];
$sessionID = $_GET['sessionID'];
$sessionName = $_GET['sessionName'];

$sql = "INSERT INTO session_student (student_id, session_id, session_name, status)
        VALUES ($studentID, $sessionID, '$sessionName', 'attending')";

if ($conn->query($sql) === TRUE) {
    // Redirect to s_class.php
    header("Location: s_class.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
