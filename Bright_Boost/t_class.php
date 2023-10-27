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

$host = "localhost";
$user = "root";
$pwd = "";
$sql_db = "bright_boost";

global $connnection;
$connnection = new mysqli($host, $user, $pwd, $sql_db);

$query = "SELECT * FROM questions";
$result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!--display "Welcome <tutor name>. <Session>" need to be worked through DB-->
  <title>Tutor | Start Session</title>

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

    <div class="pagetitle">
      <h1>Manage Class</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Class</li>
          <li class="breadcrumb-item">Manage Class</li>
          <li class="breadcrumb-item active" id="activeName"></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="card-title" id="classTitle"></h3>
          <hr>
          <div class="row">
            <div class="col-lg-9">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Questions List</h5>



                  <table class="table table-bordered">
                    <tr>
                      <td> Question ID </td>
                      <td> Question </td>
                      <td> Student ID </td>
                      <td> Select to Answer </td>
                    </tr>
                    <tr>
                      <?php
                      while ($row = mysqli_fetch_assoc($result)) {
                      ?>

                        <td><?php echo $row["Question_id"];  ?></td>
                        <td><?php echo $row["Question_Content"]; ?></td>
                        <td><?php echo $row["Student_Id"]; ?></td>
                        <!--<td><a href="t_fillAnswer.php" class="btn btn-primary">Answer</a></td>-->

                        <td><a href="t_fillAnswer.php?question_id=<?php echo $row["Question_id"]; ?>" class="btn btn-primary">Answer</a></td>


                    </tr>
                  <?php
                      }
                  ?>

                  </table>






                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Enrolled Student List</h5>
                  <!--Dummy Data-->
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Student Number</th>
                        <th scope="col">Name</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>1001</td>
                        <td>Jacob Yorksher</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>1002</td>
                        <td>Hina Masaka</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>1003</td>
                        <td>Duke Coconut</td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>1004</td>
                        <td>Golden Retriever</td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>1005</td>
                        <td>Minsoo Kim</td>
                      </tr>
                    </tbody>
                  </table>
                  <!--Dummy Data-->
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
  <script src="assets/js/tutor.js"></script>

</body>

</html>