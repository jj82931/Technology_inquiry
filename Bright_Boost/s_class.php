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
error_reporting(E_ALL);
//Chaeyeon's connection
$host = "localhost";
$user = "root";
$pwd = "";
$sql_db = "bright_boost";

global $connnection;
$connnection = new mysqli($host, $user, $pwd, $sql_db);
//session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!--display "Welcome <tutor name>. <Session>" need to be worked through DB-->
  <title>Student | Class</title>

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
        <span class="d-none d-lg-block">BrightBoost</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <?php

            $sql1 = "Select Student_Name from student where Student_Id='$student_ID'";
            $result1 = mysqli_query($connnection, $sql1);

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
            <a href="s_index.php">
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
            <a href="s_timetable.php">
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
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Ask question</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="s_index.html">Home</a></li>
          <li class="breadcrumb-item">Dashboard</li>
          <?php
          global $sessionName;
          $sessionName = $_SESSION['sessionName'];
          echo "<li class='breadcrumb-item'>$sessionName</li>";
          ?>

          <li class="breadcrumb-item">tutors</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <?php
        if ($connnection->connect_error) {
          die("Connection failed: " . $connnection->connect_error);
        } else {

          global $query;
          $query = "SELECT tutor_details.Tutor_Name, tutor_details.Tutor_Email
            FROM tutor_details
            JOIN subject_tutor_details ON tutor_details.Tutor_Id = subject_tutor_details.Tutor_id
            JOIN subject_details ON subject_tutor_details.Subject_id = subject_details.Subject_Id
            WHERE subject_details.Subject = '$sessionName';";

          $result = $connnection->query($query);
          if ($result->num_rows > 0) {
            $searchResult = array();
            while ($row = $result->fetch_assoc()) {
              $searchResult[] = $row;
            }
            foreach ($searchResult as $row) {
              echo "<div class='col-xl-4'>";
              echo "<div class='card'>";
              echo "<div class='card-body profile-card pt-4 d-flex flex-column align-items-center'>";
              echo "<h2>" . $row['Tutor_Name'] . "</h2>";
              echo "<h3>" . $row['Tutor_Email'] . "</h3>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
            }
          } else {
            echo "<script>
                        alert('No result in tutor list.');
                    </script>";
          }
        }
        ?>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Ask question</h5>

            <!-- No Labels Form -->
            <form class="row g-3" method="post" action="s_postQuestion.php" name="formPostQuestion">
              <div class="col-md-4">
                <select id="inputState" class="form-select" name="classTutorSelect">
                  <optgroup label="Please Select the tutor.">
                    <?php
                    $result = $connnection->query($query);
                    if ($result->num_rows > 0) {
                      $searchResult = array();
                      while ($row = $result->fetch_assoc()) {
                        $searchResult[] = $row;
                      }
                      foreach ($searchResult as $row) {
                        echo "<option selected>" . $row['Tutor_Name'] . "</option>";
                      }
                    } else {
                      echo "SQL error in totur loaded the name of tutor";
                    }
                    ?>
                  </optgroup>
                </select>
              </div>
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="content" name="classAskContent"></textarea>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
            </form><!-- End No Labels Form -->

          </div>
        </div>
    </section>
    <section class="section profile">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Previous Questions</h5>
          <table class="table table-bordered">
            <tr>
              <td> Question ID </td>
              <td> Question </td>
              <td> View Answer </td>
            </tr>
            <tr>
              <?php

              $sql3 = "Select * from questions WHERE Student_Id='$student_ID'";
              $result3 = mysqli_query($connnection, $sql3);
              while ($row = mysqli_fetch_assoc($result3)) {
              ?>

                <td><?php echo $row["Question_id"];  ?></td>
                <td><?php echo $row["Question_Content"]; ?></td>

                <!--<td><a href="t_fillAnswer.php" class="btn btn-primary">Answer</a></td>-->

                <td><a href="s_answer.php?question_id=<?php echo $row["Question_id"]; ?>" class="btn btn-primary">View Answer</a></td>


            </tr>
          <?php
              }
          ?>

          </table>


          </form>

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