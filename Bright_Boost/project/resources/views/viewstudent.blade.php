<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Brighton Boost shcool</title>
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
  {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/css/bootstrap-modal.css" rel="stylesheet"> --}}

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
{{-- <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" /> --}}



<script  src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script  src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script  src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/datatables-buttons/2.4.2/js/dataTables.buttons.min.js"></script>
{{-- <script  src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modal.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>




{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



{{-- <script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.dataTables.min.js" type="text/javascript"></script> --}}
{{-- <script src="assets/js/main.js"></script> --}}

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
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

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">3</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 3 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>


            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>New Question listed</h4>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>New Message</h4>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>New Announcement</h4>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Tutor</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
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
            <a class="nav-link " href="/">
              <i class="bi bi-grid"></i>
              <span>Dashboard</span>
            </a>
          </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#class-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Manage</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="class-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="viewstudent">
              <i class="bi bi-circle"></i><span>View Students</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      {{-- <li class="nav-item">
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
      </li><!-- End Tables Nav --> --}}

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Student List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">View Students</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                  {{-- <div id="btn-place" style="width: 25px; height: 25px"></div> --}}

                  <h5 class="card-title">Table</h5>
                  <!-- Default Table -->
                  <table class="table" id='stu_tab'>
                    <thead>
                      <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Student Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email Id</th>
                        <th scope="col">School Name</th>
                        <th scope="col">Subscription Plan From</th>
                        <th scope="col">Subscription Plan To</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                  </table>
                  <!-- End Default Table Example -->
                </div>
            </div>
        </div>
      </div>
    </section>

    {{-- New Student --}}
    <div class="modal fade" id="showstu" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h3 class="modal-title">Add New Student</h3>
                    {{-- <button type="button" class="btn-close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" id="sub_modal">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group col-12">
                                    {{-- <div class="input-group mt-2">
                                        <lable class="col-sm-4 col-form-lable" for="stu_num">Student Number</lable>
                                        <input type="text" class="form-control form-control-sm" id="stu_num"
                                            name="stu_num" required/>
                                    </div> --}}
                                    <div class="input-group mt-2">
                                        <lable class="col-sm-4 col-form-lable" for="user_name">Student Name</lable>
                                        <input type="text" class="form-control form-control-sm" id="user_name" name="user_name" />
                                    </div>
                                    <div class="input-group mt-2">
                                        <lable class="col-sm-4 col-form-lable" for="email_id">Email Id</lable>
                                        <input type="text" class="form-control form-control-sm" id="email_id"
                                            name="email_id" required/>
                                    </div>
                                    <div class="input-group mt-2">
                                        <lable class="col-sm-4 col-form-lable" for="school_name">School Name</lable>
                                        <input type="text" class="form-control form-control-sm" id="school_name"
                                            name="school_name" required/>
                                    </div>
                                    <div class="input-group mt-2">
                                        <lable class="col-sm-4 col-form-lable" for="subscription_plan_from">Subscription Plan From</lable>
                                        <input type="date" class="form-control form-control-sm" id="subscription_plan_from"
                                            name="subscription_plan_from" required/>
                                    </div>
                                    <div class="input-group mt-2">
                                        <lable class="col-sm-4 col-form-lable" for="subscription_plan_to">Subscription Plan To</lable>
                                        <input type="date" class="form-control form-control-sm" id="subscription_plan_to"
                                            name="subscription_plan_to" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-right">
                        <button type="submit" class="btn btn-outline-default btn-primary"><i class="fa fa-save"></i> Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Edit modal --}}
user_name
email_id
school_name
subscription_plan_from
subscription_plan_to

<div class="modal fade" id="editmode" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h3 class="modal-title">Edit Asset</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" id="edit_stu">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group col-12">
                                <div class='input-group mt-2'>
                                    <input type='hidden' class='form-control form-control-sm' id='iddd' name='id' />
                                </div>
                                <div class="input-group mt-2">
                                    <lable class="col-sm-4 col-form-lable" for="stu_number">Student Number</lable>
                                    <input type="text" class="form-control form-control-sm" id="stu_number"
                                        name="stu_num" readonly/>
                                </div>
                                <div class="input-group mt-2">
                                    <lable class="col-sm-4 col-form-lable" for="user_name">Student Name</lable>
                                    <input type="text" class="form-control form-control-sm" id="stu_name"
                                        name="user_name" />
                                </div>
                                <div class="input-group mt-2">
                                    <lable class="col-sm-4 col-form-lable" for="stu-email_id">Student Email</lable>
                                    <input type="text" class="form-control form-control-sm" id="stu-email_id"
                                        name="email_id" />
                                </div>
                                <div class="input-group mt-2">
                                    <lable class="col-sm-4 col-form-lable" for="stu_school_name">School Name</lable>
                                    <input type="text" class="form-control form-control-sm" id="stu_school_name"
                                        name="school_name" />
                                </div>
                                <div class="input-group mt-2">
                                    <lable class="col-sm-4 col-form-lable" for="stu_subscription_plan_from">Subscription Plan From</lable>
                                    <input type="date" class="form-control form-control-sm" id="stu_subscription_plan_from"
                                        name="subscription_plan_from" />
                                </div>
                                <div class="input-group mt-2">
                                    <lable class="col-sm-4 col-form-lable" for="stu_subscription_plan_to">Subscription Plan To</lable>
                                    <input type="date" class="form-control form-control-sm" id="stu_subscription_plan_to"
                                        name="subscription_plan_to" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-right">
                    <button type="submit" class="btn btn-outline-default btn-primary"><i class="fa fa-save"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- delete --}}

<div class="modal fade" id="delmode" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content ">
            <div class="modal-body modal-body-centered text-center bg-primary" >
                <p>Do you want to delete the '<strong>Student detail</strong>'?</p>
                <input type="hidden" id="">
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn bg-danger btn-sm" data-bs-dismiss="modal">No</button>

                <button type="submit" class="btn bg-danger btn-sm" id="done_del">Yes</button>
            </div>
        </div>

    </div>
</div>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Brighton Boost School</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script>

    $(document).ready(function() {
        $('#stu_tab').DataTable({
            dom: 'rZBftip',
            paging: true,
            bFilter: true,
            responsive: true,
            autoWidth: false,
            ordering: true,
            // bProcessing: true,
            bRetrieve: true,
            serverSide: true,
            bJQueryUI: true,
            iDisplayLength: 10,
            pagingType: "simple_numbers",
            oLanguage: {
                "sSearch": "",
                // "sLengthMenu": "<div style='width:3rem'> _MENU_ </div>",
            },
            "fnDrawCallback": function() {
                $("input[type='search']").attr("placeholder", "search");
                $("input[type='search']").attr("id", "searchBox");
                $("select[name='dialPlanListTable_length'], #searchBox");
            },
            "ajax":{
                "url": "{{ url('save_user') }}"
            },
            "columns": [{
                        data: 'sno'
                    },
                    {
                        data: 'stu_num'
                    },
                    {
                        data: 'user_name'
                    },
                    {
                        data: 'email_id'
                    },
                    {
                        data: 'school_name'
                    },
                    {
                        data: 'subscription_plan_from'
                    },
                    {
                        data: 'subscription_plan_to'
                    },
                    {
                        data: 'action'
                    },
                ],
                buttons: [{
                text: 'Add Student',
                action: function() {
                    add_newstu();
                }
            }]
        }).buttons().container().appendTo('#stu_tab_wrapper .col-md-6:eq(0)');
    });

    function add_newstu() {
        $('#showstu').modal('show');
    }

    function reload() {
            $('#stu_tab').DataTable().ajax.reload();
        }

    $("#sub_modal").submit(function(e) {
            e.preventDefault();
            $('button[type="submit"]').prop('disabled', true);
            var data = new FormData(this);
            data.append('_token', '{{ csrf_token() }}');
            $.ajax({
                url: "{{ url('stu_add') }}",
                type: "POST",
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                async: true,
                success: function(result) {
                 $('button[type="submit"]').prop('disabled', false);
                    toastr.success('New Student is created..!');
                    reload();
                    $('#showstu').modal('hide');
                    $('#sub_modal')[0].reset();
                },
                error: function(result) {
                    $('button[type="submit"]').prop('disabled', false);
                    toastr.error('Network Error or Duplicate Entry. try again.!');
                }
            });
        });


        function edit(id){
            $.get('data_view', { id:id },function(data){
                $('#iddd').val(data.id);
                $('#stu_number').val(data.stu_num);
                $('#stu_name').val(data.user_name);
                $('#stu-email_id').val(data.email_id);
                $('#stu_school_name').val(data.school_name);
                $('#stu_subscription_plan_from').val(data.subscription_plan_from);
                $('#stu_subscription_plan_to').val(data.subscription_plan_to);
                $('#editmode').modal('show');
            });
        }


        $("#edit_stu").submit(function(e){
            e.preventDefault();
            $('button[type="submit"]').prop('disabled', true);
            var data = new FormData(this);
            data.append('_token','{{csrf_token() }}');
            $.ajax({
                url:"{{url('edit_data_stu')}}",
                type: "POST",
                data : data,
                processData: false,
                contentType: false,
                cache: false,
                async: true,
                success : function(result){
                   $('button[type="submit"]').prop('disabled', false);
                    reload();
                    toastr.success(' Successfull..!');
                    $('#editmode').modal('hide');
                },
                error: function(result){
                   $('button[type="submit"]').prop('disabled', false);
                    toastr.error('Network Error or Duplicate Entry. try again.!');
                }
            });
        });

        function del(id){
            $('#delmode').modal('show');
            $("#done_del").click(function()
             {
               $.get('delt_data', {id:id}, function (data) {
                   reload();
                   toastr.success('Student detail successfully deleted!....');
                $('#delmode').modal('hide');
                  });
             })
        }
</script>

  <!-- Template Main JS File -->




</body>

</html>
