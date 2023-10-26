<?php
global $connnection;
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "bright_boost"; 

// Create a connection to the database
$connnection = new mysqli($host, $username, $password, $database);

// Check the connection
if ($connnection->connect_error) {
    die("Connection failed: " . $connnection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $answerContent = $_POST["answer_content"];
    $questionId = $_POST["questionId"]; // Get the question ID from the form

    if (empty($answerContent)) {
        echo "<script>
                alert('Please, enter an answer.');
                window.location.href = 't_postAnswer.php';
            </script>";
    } else {
        date_default_timezone_set('Australia/Melbourne');
        $currentDate = date("Y-m-d H:i:s");
        $query = "INSERT INTO answers (Answer_id, Answer_Content, Timestamp, Answered, Question_Id, Tutor_Id)
        VALUES ('','$answer_content','$currentDate','','1','$tutorId');";
        $result = $connnection->query($query);

        $result = $connnection->query($query);

        if ($result == true) {
            echo "<script>
                    alert('The answer is submitted successfully.');
                    window.location.href = 't_postAnswer.php';
                </script>";
        } else {
            echo "<script>
                    alert('SQL error in submitting the answer.');
                    window.location.href = 't_postAnswer.php';
                </script>";
        }
    }
}
?>
