<?php
session_start();

if (isset($_SESSION['tutor_id'])) {
  $tutor_ID = $_SESSION['tutor_id'];
  echo $tutor_ID;
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

  <title>Tutor | Dashboard - Brighton Boost school</title>
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
        <span class="d-none d-lg-block">Brighton Boost School</span>
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

            $sql = "Select Tutor_Name from tutor_details where Tutor_Id='$tutor_ID'";
            $result = mysqli_query($conn, $sql);

            if ($result && $result->num_rows == 1) {
              $row = $result->fetch_assoc();
              $tutor_Name = $row['Tutor_Name'];
              echo "<span class=\"d-none d-md-block dropdown-toggle ps-2\">$tutor_Name</span>";
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

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="t_index.php">
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
            <a href="t_manage_class.php">
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
            <a href="t_timetable.php">
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
        <a class="nav-link collapsed" href="t_feedback.php">
          <i class="bi bi-grid"></i>
          <span>Feedback</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="logout.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <h5 class="card-title">Punch In - Out</h5>
                      <div class="col-lg-4">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title"><a href="">Punch In</a></h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title"><a href="">Punch Out</a></h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">

                  <h3 class="card-title">Welcome Tutor</h3>
                  <?php

                  $sql = "Select Tutor_Name from tutor_details where Tutor_Id='$tutor_ID'";
                  $result = mysqli_query($conn, $sql);

                  if ($result && $result->num_rows == 1) {
                    $row = $result->fetch_assoc();
                    $tutor_Name = $row['Tutor_Name'];
                    echo "<h5>$tutor_Name</h5>";
                  } else {
                    echo "Invalid";
                  }


                  ?>
                  <!--Back-end load person tutor's name who signed in successfully from DB-->

                  <hr>
                  <h5 class="card-title">Important Announcement: Reduction in Tutoring Staff</h5>
                  <div style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                    <p>
                      Dear respected tutors,<br><br>
                      We hope this message finds you well. We want to inform you about a recent decision made by our esteemed board members. In light of the current situation,<br>
                      it has been decided to reduce the tutoring staff by <strong>95%</strong>. We understand that this might come as a surprise and want to express our gratitude for the hard work and dedication you have shown.<br>
                      For those tutors who are considering voluntary retirement, we are currently accepting applications. If you wish to apply, please visit our office at G102 and submit your application. Your cooperation in this process is highly appreciated.<br>
                      Additionally, we would like to express our gratitude to those tutors who choose to return one month's salary. A <strong>10$ woolworth card</strong> of appreciation awaits you as a gesture of our thanks. Your support in this matter is invaluable.<br><br>
                      Thank you for your understanding and cooperation during this challenging time.<br><br>
                      Warm regards,<br>
                      Director Boss<br>
                    </p>
                  </div>
                </div>
              </div>
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>