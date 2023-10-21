<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bright_boost";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from the session_details table
$sql = "SELECT session_name, session_day, session_start, session_end FROM session_details";
$result = mysqli_query($conn, $sql);

// Generate the HTML table
if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<thead><tr><th>Class Days</th></tr></thead>";
    echo "<tbody>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["session_day"] . "</td></tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "No data found.";
}

// Close the database connection
mysqli_close($conn);
?>
