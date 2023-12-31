<?php
session_start();

if (isset($_SESSION['admin_id'])) {
  $admin_ID = $_SESSION['admin_id'];
  echo $admin_ID;
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
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!--display "Welcome <tutor name>. <Session>" need to be worked through DB-->
  <title>Admin | Dashboard - Brighton Boost school</title>

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

            $sql = "Select Admin_Name from admin_details where Admin_Id='$admin_ID'";
            $result = mysqli_query($conn, $sql);

            if ($result && $result->num_rows == 1) {
              $row = $result->fetch_assoc();
              $admin_Name = $row['Admin_Name'];
              echo "<span class=\"d-none d-md-block dropdown-toggle ps-2\">$admin_Name</span>";
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
        <a class="nav-link collapsed" data-bs-target="#class-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Class</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="class-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="s_index.html">
              <i class="bi bi-circle"></i><span>Manage Class</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables and Calender</span><i class="bi bi-chevron-down ms-auto"></i>
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
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


    <section class="section">
      <div class="row">
        <div class="col-lg-19">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Admin Dashboard</h3>
              <hr>
              <div class="row">
                <div class="col-lg-20">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Stats<span>&nbsp;</span></h5>

                      <!-- Left side columns -->
                      <div class="col-lg-12">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title">Users Stats</h5>
                                <!-- Bar Chart -->
                                <canvas id="barChart" style="max-height: 400px;"></canvas>
                                <script>
                                  document.addEventListener("DOMContentLoaded", () => {
                                    new Chart(document.querySelector('#barChart'), {
                                      type: 'bar',
                                      data: {
                                        labels: ['Students', 'Tutor'],
                                        datasets: [{
                                          label: 'Percentage',
                                          data: [72, 100],
                                          backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(255, 159, 64, 0.2)'
                                          ],
                                          borderColor: [
                                            'rgb(255, 99, 132)',
                                            'rgb(255, 159, 64)'
                                          ],
                                          borderWidth: 1
                                        }]
                                      },
                                      options: {
                                        scales: {
                                          y: {
                                            beginAtZero: true
                                          }
                                        }
                                      }
                                    });
                                  });
                                </script>
                                <!-- End Bar Chart -->
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title">Rate of Attendance a Half Year - Students</h5>
                                <!-- Line Chart -->
                                <canvas id="lineChart" style="max-height: 400px;"></canvas>
                                <script>
                                  document.addEventListener("DOMContentLoaded", () => {
                                    new Chart(document.querySelector('#lineChart'), {
                                      type: 'line',
                                      data: {
                                        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                                        datasets: [{
                                          label: 'Line Chart',
                                          data: [65, 59, 80, 81, 56, 55, 40],
                                          fill: false,
                                          borderColor: 'rgb(75, 192, 192)',
                                          tension: 0.1
                                        }]
                                      },
                                      options: {
                                        scales: {
                                          y: {
                                            beginAtZero: true
                                          }
                                        }
                                      }
                                    });
                                  });
                                </script>
                                <!-- End Line Chart -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div><!-- End Left side columns -->
    </section>

    <!-- Right side columns -->
    <!-- <div class="col-lg-4">
      
      </div> -->
    <!--End Right side columns. This places is for some useful information-->


    <div class="col-lg-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><a href="a_viewStudent.html">Students</a><span>&nbsp; </span></h5>
          <h6>1244</h6>
          <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>
        </div>
      </div>
    </div>


    <div class="col-lg-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><a href="a_viewTutor.html">Tutor</a><span>&nbsp;</span></h5>
          <!--<h6>1244</h6>-->
          <span class="text-danger small pt-1 fw-bold">100%</span> <span class="text-muted small pt-2 ps-1"></span>
        </div>
      </div>
    </div>
    </div>
    </div>





    <div class="row">
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><a href="pages-faq.html">Feedback</a><span>&nbsp; </span></h5>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>

    </div>
    </section>

  </main><!-- End #main -->

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