<?php
session_start();

if (isset($_SESSION['student_id'])) {
    $student_ID = $_SESSION['student_id'];
    echo $student_ID;
} else {
    // When the user is not logged in
    header("Location: login.php"); // Redirect to the login page if not logged in
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bright_boost";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Sucess";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - Bright Boost shcool</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">Birghton Boost School</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <?php

                        $sql1 = "Select Student_Name from student where Student_Id='$student_ID'";
                        $result1 = mysqli_query($conn, $sql1);

                        if ($result1 && $result1->num_rows == 1) {
                            $row = $result1->fetch_assoc();
                            $student_Name = $row['Student_Name'];
                            echo "<span class=\"d-none d-md-block dropdown-toggle ps-2\">$student_Name</span>";
                        } else {
                            echo "Invalid";
                        }


                        ?>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="logout.php">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->
    </header>

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="index.html">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->


            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#class-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Class</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="class-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="t_manage_class.html">
                            <i class="bi bi-circle"></i><span>Manage Class</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-elements.html">
                            <i class="bi bi-circle"></i><span>N/A</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Forms Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Table and Calender</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="t_timetable.html">
                            <i class="bi bi-circle"></i><span>Time Table</span>
                        </a>
                    </li>
                    <li>
                        <a href="t_calender.html">
                            <i class="bi bi-circle"></i><span>Academic calender</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->


            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.html">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-faq.html">
                    <i class="bi bi-question-circle"></i>
                    <span>F.A.Q</span>
                </a>
            </li><!-- End F.A.Q Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-contact.html">
                    <i class="bi bi-envelope"></i>
                    <span>Contact</span>
                </a>
            </li><!-- End Contact Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-register.html">
                    <i class="bi bi-card-list"></i>
                    <span>Register</span>
                </a>
            </li><!-- End Register Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-login.html">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Login</span>
                </a>
            </li><!-- End Login Page Nav -->
        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var questionTitle = document.getElementById("activeName");
                questionTitle.textContent = "Subject: " + sessionStorage.getItem("className");
            });
        </script>

        <div class="pagetitle">
            <h1>Manage Class</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Class</li>
                    <li class="breadcrumb-item active">View Question</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <!--<section class="section dashboard">
      <div class="row">

        
        <div class="col-lg-12">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title" id="activeName"></h2>
                </div>
              </div>
            </div>
            <hr>
          </div>-->


        <section class="section profile">
            <div class="row">




                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="post">
                                    <h2 class="card-title">Answer Board</h2>
                                    <?php

                                    if (isset($_GET['question_id'])) {
                                        $question_id = $_GET['question_id'];
                                    }

                                    $sql = "SELECT Question_Content FROM questions WHERE Question_id = $question_id";
                                    $result = mysqli_query($conn, $sql);

                                    if ($row = mysqli_fetch_assoc($result)) {
                                        $questionContent = $row["Question_Content"];

                                        // Use the fetched question content to populate the input field
                                        echo '<div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"> Question ID</label>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control" name="question_id" readonly="readonly" value="' . $question_id . '">
                                </div>
                              </div>';

                                        echo '<div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Question</label> 
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="question_content" readonly="readonly" value="' . $questionContent . '"> <!--This name data need to be worked-->
                        </div>
                      </div>';
                                    }

                                    $sql4 = "Select * from answer_table where Question_ID = '$question_id'";
                                    $result4 = mysqli_query($conn, $sql4);

                                    if ($row = mysqli_fetch_assoc($result4)) {
                                        $answerContent = $row["Answer_Content"];

                        echo '<div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Answer</label> 
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="question_content" readonly="readonly" value="' . $answerContent . '"> <!--This name data need to be worked-->
                        </div>
                      </div>';
                                    }


                                    ?>
                                    <!--<div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label"> Question ID</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control" name="question_id" readonly="readonly">
                      </div>
                    </div>-->

                                    <!-- <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Tutor ID</label> 
                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="tutor_id"> 
                        </div>
                      </div>-->

                                    <!--<div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Question</label> 
                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="question_content">
                        </div>
                      </div>-->


                                    

                                    <input type="submit" value="submit" name="submit">
                                </form>



                                <!-- <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Question</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control" readonly="readonly" value="I request to extend for..n">
                      </div>
                      </div>-->

                                <!-- <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Student ID</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control"  value="">
                      </div>
                    </div>-->
                                <!--<fieldset class="row mb-3">
                      <div class="row mb-3">
                        <div class="col-sm-10">
                        </div>
                      </div>-->

                                <!--<div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Tutor Name</label> 
                        <div class="col-sm-3">
                          <input type="text" class="form-control"> 
                        </div>
                      </div>-->



                                <!--<div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Answer ID</label> 
                        <div class="col-sm-3">
                          <input type="text" class="form-control">
                        </div>
                      </div>-->



                                </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

        </section>


    </main>




    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Brighton Boost School</span></strong>. All Rights Reserved
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>


</body>

</html>