<?php
    /* Do not forget to change SQL connection */
    
    global $connnection;
    //Chaeyeon's connection
    $host = "localhost";
    $user = "root";
    $pwd = "";
    $sql_db = "bright_boost";
    $connnection = new mysqli($host, $user, $pwd, $sql_db);
    

    if ($connnection->connect_error) {
        die("Connection failed: " . $connnection->connect_error);
    }else{
        $classTutorSelect = $_POST["classTutorSelect"];
        $classAskContent = $_POST["classAskContent"];
        if(empty($classTutorSelect)){
            echo "<script>
                    alert('Please, select the tutor.');
                    window.location.href = 's_class.php'; 
                </script>";
        }else if(empty($classAskContent)){
            echo "<script>
                    alert('Please, fill the content.');
                    window.location.href = 's_class.php'; 
                </script>";
        }
        else{
            $tutorId = "";
            $getTutorid = "SELECT Tutor_Id from tutor_details WHERE Tutor_Name = '$classTutorSelect'";
            $result2 = $connnection->query($getTutorid);
            if ($result2->num_rows > 0) {
                $searchResult = array();
                while ($row = $result2->fetch_assoc()) {
                    $searchResult[] = $row;
                }
                foreach ($searchResult as $row){
                    $tutorId = $row['Tutor_Id'];
                }
            }
            date_default_timezone_set('Australia/Melbourne');
            $currentDate = date("Y-m-d H:i:s");
            $query = "INSERT INTO questions (Question_id, Question_Content, Timestamp, Answered, Student_Id, Tutor_Id)
            VALUES ('','$classAskContent','$currentDate','','1','$tutorId');";
            $result = $connnection->query($query);

            if ($result == true) {
                echo "<script>
                        alert('The question is posted sucessfully.');
                        window.location.href = 's_class.php'; 
                    </script>";
            } else {
                echo "<script>
                        alert('SQL error in the post questiion');
                        window.location.href = 's_class.php'; 
                    </script>";
            }
        }
    }
?>
