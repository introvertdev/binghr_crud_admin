<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>BingHR CRUD Admin Dashboard</title>

    <meta name="description" content="BingHR CRUD Admin Dashboard">
    <meta name="author" content="IntrovertDev">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="BingHR CRUD Admin Dashboard">
    <meta property="og:site_name" content="BingHR">
    <meta property="og:description" content="BingHR CRUD Admin Dashboard">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="assets/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet" href="assets/js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="assets/js/plugins/parsley/parsley.css">


    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="assets/css/dashmix.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
    <!-- END Stylesheets -->
</head>

<body>
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
        

        <!-- Sidebar -->
        <nav id="sidebar" aria-label="Main Navigation">
            <!-- Side Header -->
            <div class="bg-header-dark">
                <div class="content-header bg-white-5">
                    <!-- Logo -->
                    <a class="fw-semibold text-white tracking-wide" href="index.html">
                        <span class="smini-visible">
                            B<span class="opacity-75">HR</span>
                        </span>
                        <span class="smini-hidden">
                            Bing<span class="opacity-75">HR</span>
                        </span>
                    </a>
                    <!-- END Logo -->

                    <!-- Options -->
                    <div>
                        <!-- Toggle Sidebar Style -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
                        <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');">
                            <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                        </button>
                        <!-- END Toggle Sidebar Style -->

                        <!-- Dark Mode -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#dark-mode-toggler" data-class="far fa" onclick="Dashmix.layout('dark_mode_toggle');">
                            <i class="far fa-moon" id="dark-mode-toggler"></i>
                        </button>
                        <!-- END Dark Mode -->

                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_close">
                            <i class="fa fa-times-circle"></i>
                        </button>
                        <!-- END Close Sidebar -->
                    </div>
                    <!-- END Options -->
                </div>
            </div>
            <!-- END Side Header -->

            <!-- Sidebar Scrolling -->
            <div class="js-sidebar-scroll">
                <!-- Side Navigation -->
                <div class="content-side">
                    <ul class="nav-main">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="javascript: void(0);">
                                <i class="nav-main-link-icon fa fa-location-arrow"></i>
                                <span class="nav-main-link-name">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="javascript: void(0);">
                                <i class="nav-main-link-icon fa fa-user-friends"></i>
                                <span class="nav-main-link-name">Users</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="javascript: void(0);">
                                <i class="nav-main-link-icon fa fa-border-all"></i>
                                <span class="nav-main-link-name">Departments</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="javascript: void(0);">
                                <i class="nav-main-link-icon fa fa-boxes"></i>
                                <span class="nav-main-link-name">Activities</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="javascript: void(0);">
                                <i class="nav-main-link-icon fa fa-vector-square"></i>
                                <span class="nav-main-link-name">Holidays</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="javascript: void(0);">
                                <i class="nav-main-link-icon fa fa-flask"></i>
                                <span class="nav-main-link-name">Events</span>
                            </a>
                        </li>
                        <li class="nav-main-item open">
                            <a class="nav-main-link " href="javascript: void(0);">
                                <i class="nav-main-link-icon fa fa-grip-horizontal"></i>
                                <span class="nav-main-link-name">Payroll</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="javascript: void(0);">
                                <i class="nav-main-link-icon fa fa-sticky-note"></i>
                                <span class="nav-main-link-name">Accounts</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="javascript: void(0);">
                                <i class="nav-main-link-icon fa fa-wrench"></i>
                                <span class="nav-main-link-name">Reports</span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
                <!-- END Side Navigation -->
            </div>
            <!-- END Sidebar Scrolling -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div class="space-x-1">
                    <!-- Toggle Sidebar -->
                    <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="sidebar_mini_toggle">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                    <!-- END Toggle Sidebar -->

                    <!-- Open Search Section -->
                    <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="header_search_on">
                        <i class="fa fa-fw opacity-50 fa-search"></i> <span class="ms-1 d-none d-sm-inline-block">Search</span>
                    </button>
                    <!-- END Open Search Section -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="space-x-1">
                    <!-- User Dropdown -->
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-user d-sm-none"></i>
                            <span class="d-none d-sm-inline-block">Admin</span>
                            <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
                        </button>
                    </div>
                    <!-- END User Dropdown -->

                    <!-- Notifications Dropdown -->
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn btn-alt-secondary" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-bell"></i>
                        </button>
                    </div>
                    <!-- END Notifications Dropdown -->

                    <!-- Toggle Side Overlay -->
                    <button type="button" class="btn btn-alt-secondary" >
                    <i class="far fa-fw fa-user me-1"></i>
                    </button>
                    <!-- END Toggle Side Overlay -->
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->

            <!-- Header Search -->
            <div id="page-header-search" class="overlay-header bg-header-dark">
                <div class="bg-white-10">
                    <div class="content-header">                        
                            <div class="input-group">
                                <button type="button" class="btn btn-alt-primary" data-toggle="layout" data-action="header_search_off">
                                    <i class="fa fa-fw fa-times-circle"></i>
                                </button>
                                <input type="text" class="form-control border-0" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                            </div>
                    </div>
                </div>
            </div>
            <!-- END Header Search -->

            <div id="page-header-loader" class="overlay-header bg-header-dark">
                <div class="bg-white-10">
                    <div class="content-header">
                        <div class="w-100 text-center">
                            <i class="fa fa-fw fa-sun fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">
            <!-- Hero -->
            <div class="bg-body-light">
                <div class="content content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                        <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Users</h1>
                        <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active" aria-current="page">Users</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- END Hero -->

            <!-- Page Content -->
            <div class="content">

                <!-- Dynamic Table with Export Buttons -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            List Users
                        </h3>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="col" align="right">
                            <button type="button" name="add_exam" id="add_employee" class="btn btn-success btn-circle btn-md"><i class="fas fa-plus"></i> Add Employee</button>
                        </div>
                        <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 40%;">Name</th>
                                    <th class="d-none d-sm-table-cell" style="width: 20%;">Created Date</th>
                                    <th class="d-none d-sm-table-cell" style="width: 20%;">Role</th>
                                    <th class="d-none d-sm-table-cell" style="width: 20%;">Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <!-- END Dynamic Table with Export Buttons -->
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->


        <!-- Extra Large Block Modal -->
        <div class="modal" id="employee_modal" tabindex="-1" role="dialog" aria-labelledby="employee_modal" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="block block-rounded block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h5 class="modal-title" id="modal_title">Add Employee Data</h5>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <form method="post" id="employee_form">
                                <span id="form_message"></span>
                                <div class="form-group mb-3">
                                    <input type="text" name="employee_id" id="employee_id" class="form-control" required data-parsley-trigger="keyup" placeholder="Employee ID*" readonly />
                                </div>
                                <div class="row row-cols-2 mb-3">
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="text" name="first_name" id="first_name" class="form-control" required data-parsley-trigger="keyup" placeholder="First Name*" />
                                        </div>
                                    </div>
                                    <div class="col form-group">
                                        <div class="form-group">
                                            <input type="text" name="last_name" id="last_name" class="form-control" required data-parsley-trigger="keyup" placeholder="Last Name*" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-cols-3 mb-3">
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required data-parsley-type="email" data-parsley-trigger="keyup" placeholder="Email ID*" />
                                        </div>
                                    </div>
                                    <div class="col form-group">
                                        <div class="form-group">
                                            <input type="text" name="phone" id="phone" class="form-control" required data-parsley-type="number" data-parsley-trigger="keyup" placeholder="Mobile No*" />
                                        </div>
                                    </div>
                                    <div class="col form-group">
                                        <div class="form-group">
                                            <select class="form-control" name="role" id="role" required data-parsley-trigger="keyup">
                                                <option value="">Select Role Type*</option>
                                                <option value="super_admin">CEO and Founder</option>
                                                <option value="admin">Team Lead</option>
                                                <option value="hr_admin">HR</option>
                                                <option value="app_designer">App Designer</option>
                                                <option value="employee">Web Developer</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-cols-3 mb-3">
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="text" name="username" id="username" class="form-control" required data-parsley-trigger="keyup" placeholder="Username*" />
                                        </div>
                                    </div>
                                    <div class="col form-group">
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" class="form-control" data-parsley-trigger="keyup" placeholder="Password*" />
                                        </div>
                                    </div>
                                    <div class="col form-group">
                                        <div class="form-group">
                                            <input type="password" name="c_password" id="c_password" class="form-control" data-parsley-equalto="#password" placeholder="Confirm Password*" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 bg-light">
                                    <div class="row cols-4">
                                        <div class="col-6">
                                            <h5 class="text-dark p-2">Module Permissions</h5>
                                        </div>
                                        <div class="col-2">
                                            <h6 class="text-dark p-2">Read</h6>
                                        </div>
                                        <div class="col-2">
                                            <h6 class="text-dark p-2">Write</h6>
                                        </div>
                                        <div class="col-2">
                                            <h6 class="text-dark p-2">Delete</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row cols-4">
                                    <div class="col-6">
                                        <p class="p-3">Super Admin</p>
                                    </div>
                                    <div class="col-2 p-3">
                                        <input type="checkbox" class="form-check-input input-form-group acl_permission" data-id="1" name="acl_permission[]" value="r" id="admin_read">
                                    </div>
                                    <div class="col-2 p-3">
                                        <input type="checkbox" class="form-check-input input-form-group acl_permission" data-id="1" name="acl_permission[]" value="w" id="admin_write">
                                    </div>

                                    <div class="col-2 p-3">
                                        <input type="checkbox" class="form-check-input input-form-group acl_permission" data-id="1" name="acl_permission[]" value="d" id="admin_delete">
                                    </div>
                                </div>
                                <div class="row cols-4">
                                    <div class="col-6">
                                        <p class="p-3">Admin</p>
                                    </div>
                                    <div class="col-2 p-3">
                                        <input type="checkbox" class="form-check-input input-form-group acl_permission" data-id="2" name="acl_permission[]" value="r" id="admin_read">
                                    </div>
                                    <div class="col-2 p-3">
                                        <input type="checkbox" class="form-check-input input-form-group acl_permission" data-id="2" name="acl_permission[]" value="w" id="admin_write">
                                    </div>

                                    <div class="col-2 p-3">
                                        <input type="checkbox" class="form-check-input input-form-group acl_permission" data-id="2" name="acl_permission[]" value="d" id="admin_delete">
                                    </div>
                                </div>
                                <div class="row cols-4">
                                    <div class="col-6">
                                        <p class="p-3">Employee</p>
                                    </div>
                                    <div class="col-2 p-3">
                                        <input type="checkbox" class="form-check-input input-form-group acl_permission" data-id="3" name="acl_permission[]" value="r" id="employee_read">
                                    </div>
                                    <div class="col-2 p-3">
                                        <input type="checkbox" class="form-check-input input-form-group acl_permission" data-id="3" name="acl_permission[]" value="w" id="employee_write">
                                    </div>

                                    <div class="col-2 p-3">
                                        <input type="checkbox" class="form-check-input input-form-group acl_permission" data-id="3" name="acl_permission[]" value="d" id="employee_delete">
                                    </div>
                                </div>
                                <div class="row cols-4">
                                    <div class="col-6">
                                        <p class="p-3">HR Admin</p>
                                    </div>
                                    <div class="col-2 p-3">
                                        <input type="checkbox" class="form-check-input input-form-group acl_permission" data-id="4" name="acl_permission[]" value="r" value="w" id="admin_read">
                                    </div>
                                    <div class="col-2 p-3">
                                        <input type="checkbox" class="form-check-input input-form-group acl_permission" data-id="4" name="acl_permission[]" value="w" id="hr_admin_write">
                                    </div>

                                    <div class="col-2 p-3">
                                        <input type="checkbox" class="form-check-input input-form-group acl_permission" data-id="4" name="acl_permission[]" value="d" id="hr_admin_delete">
                                    </div>
                                </div>
                        </div>
                        <div class="block-content block-content-full text-end bg-body">

                            <input type="hidden" name="hidden_id" id="hidden_id" />
                            <input type="hidden" name="permission" id="permission" />
                            <input type="hidden" name="action" id="action" value="Add" />
                            <input type="submit" name="submit" id="submit_button" class="btn btn-primary add_employee_submit" value="Submit" />
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Extra Large Block Modal -->

        <!-- Footer -->
        <footer id="page-footer" class="bg-body-light">
            <div class="content py-0">
                <div class="row fs-sm">
                    <div class="col-sm-6 order-sm-1 text-center text-sm-start">
                        <a class="fw-semibold" href="https://1.envato.market/r6y" target="_blank">BingHR CRUD Admin Dashboard</a> &copy; <span data-toggle="year-copy"></span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!--
    -->
    <script src="assets/js/dashmix.app.min.js"></script>

    <!-- jQuery (required for DataTables plugin) -->
    <script src="assets/js/lib/jquery.min.js"></script>

    <!-- jQuery (required for BS Notify plugin) -->
    <script src="assets/js/lib/jquery.min.js"></script>
    
    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/js/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons/dataTables.buttons.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons-jszip/jszip.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js"></script>
    <script src="assets/js/plugins/datatables-buttons/buttons.print.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons/buttons.html5.min.js"></script>
    <script src="assets/js/plugins/parsley/dist/parsley.min.js"></script>

    <!-- Page JS Code -->
    <script src="assets/js/pages/be_tables_datatables.min.js"></script>
</body>

</html>
<script>
    //Fetch employee data into Datatable
    $(document).ready(function() {

        //Buttons examples
        var dataTable = $('.js-dataTable-buttons').DataTable({
            pageLength: 5,
            lengthMenu: [
                [5, 10, 20],
                [5, 10, 20]
            ],
            autoWidth: false,
            responsive: true,
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
            dom: "<'row'<'col-sm-12'<'text-center bg-body-light py-2 mb-2'B>>>" +
                "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            //lengthChange: true,
            serverSide: true,
            processing: true,
            ajax: {
                //url: "http://localhost:8000/api/all-employees",
                url: "http://localhost/binghr_crud_admin/public/api/all-employees",
                dataType: "json",
                type: "POST",
                //data: { _token: "{{csrf_token()}}" },
            },
            //dom: "Blfrtip",
            columns: [{
                    data: "name"
                },
                {
                    data: "created_at"
                },
                {
                    data: "role"
                },
                {
                    data: "options"
                }
            ],
            //buttons: ['copy', 'excel', 'pdf', 'colvis']
        });
        var buttonClassState = 0;
        var url = '';
        var method = '';

        $('#add_employee').click(function() {
            if (buttonClassState == 1) {
                buttonClassState = 0;
                $('#submit_button').toggleClass("edit_employee_submit add_employee_submit");
            }

            $('#employee_form')[0].reset();

            $('#employee_form').parsley().reset();

            $('#modal_title').text('Add Employee');

            $('#action').val('Add');

            $('#submit_button').val('Add Employee');

            $('#employee_modal').modal('show');

            $('#form_message').html('');

            $('#employee_id').val(employeeID(8)).css('textTransform', 'uppercase');

        });

        $('#employee_form').parsley();

        $('#employee_form').on('submit', function(event) {
            permissionParams();
            event.preventDefault();
            if (buttonClassState == 1) {
                var employee_id = $('#hidden_id').val();
                url = "http://localhost/binghr_crud_admin/public/api/employees/" + employee_id;
                method = 'PUT';
                var value = 'Edit Employee';
            } else {
                url = "http://localhost/binghr_crud_admin/public/api/employees";
                method = "POST";
                var value = 'Add Employee';
            }
            if ($('#employee_form').parsley().isValid()) {
                console.log($(this).serialize())
                $.ajax({
                    url: url,
                    method: method,
                    data: $(this).serialize(),
                    dataType: 'json',
                    beforeSend: function() {
                        $('#submit_button').attr('disabled', 'disabled');
                        $('#submit_button').val('Please wait...');
                    },
                    success: function(data) {
                        $('#submit_button').attr('disabled', false);
                        if (data.error != null) {
                            Dashmix.helpers('jq-notify', {
                                type: 'danger',
                                icon: 'fa fa-exclamation me-1 mr-3',
                                message: data.message
                            });
                            $('#form_message').html(data.message);
                            $('#submit_button').val(value);
                        } else {
                            Dashmix.helpers('jq-notify', {
                                type: 'success',
                                icon: 'fa fa-check me-1 mr-3',
                                message: data.message
                            });
                            $('#submit_button').val(value);
                            $('#employee_modal').modal('hide');
                            $('#message').html(data.success);
                            dataTable.ajax.reload();

                            setTimeout(function() {

                                $('#message').html('');

                            }, 5000);
                        }
                    }
                })
            }
        });

        $(document).on('click', '.edit_button', function() {
            if (buttonClassState == 0) {
                buttonClassState = 1;
                //$('#employee_form').attr('id', 'employee_form');
                $('#submit_button').toggleClass("add_employee_submit edit_employee_submit")
            }
            var employeeID = $(this).data('id');

            $('#employee_form').parsley().reset();

            $('#form_message').html('');

            $.ajax({

                url: "http://localhost/binghr_crud_admin/public/api/employees/" + employeeID,

                method: "GET",

                dataType: 'JSON',

                success: function(data) {

                    $('#employee_id').val(data.employee_id).css('textTransform', 'uppercase');
                    $('#first_name').val(data.first_name);
                    $('#last_name').val(data.last_name);
                    $('#email').val(data.email);
                    $('#phone').val(data.phone);
                    $('#role').val(data.role);
                    $('#username').val(data.username);
                    var perm = data.permission;

                    //Permission checkboxes to array 
                    var permarr = perm.split(',');
                    var permarrLenght = permarr.length;
                    $('#permission').val(permarr);

                    //convert permissions array to string
                    var nperm = permarr[0].split();
                    var stringperm = permarr.toString();
                    var narray = stringperm.split(",");

                    for (var i = 0, len = narray.length; i < len; i++) {
                        var id = narray[i].charAt(0);
                        var value1 = narray[i].charAt(1);
                        var value2 = narray[i].charAt(2);
                        var value3 = narray[i].charAt(3);

                        //check for empty values to avoid console errors
                        if (value1 != '') {
                            $(`input[data-id=${id}][value=${value1}]`).prop('checked', true);
                        }
                        if (value2 != '') {
                            $(`input[data-id=${id}][value=${value2}]`).prop('checked', true);
                        }
                        if (value3 != '') {
                            $(`input[data-id=${id}][value=${value3}]`).prop('checked', true);
                        }
                        //return;
                    }

                    $('#modal_title').text('Edit Employee Data');
                    $('#action').val('Edit');
                    $('#edit_submit_button').val('Edit Employee');
                    $('#employee_modal').modal('show');
                    $('#hidden_id').val(employeeID);


                }

            })

        });

        $(document).on('click', '.delete_button', function() {

            var employee_id = $(this).data('id');

            if (confirm("Are you sure you want to remove it?")) {

                $.ajax({

                    url: "http://localhost/binghr_crud_admin/public/api/employees/" + employee_id,

                    method: "DELETE",

                    success: function(data) {

                        $('#message').html(data);
                        
                        Dashmix.helpers('jq-notify', {
                                type: 'success',
                                icon: 'fa fa-check me-1 mr-3',
                                message: 'Employee data deleted successfully'
                            });
                        dataTable.ajax.reload();

                        setTimeout(function() {

                            $('#message').html('');

                        }, 5000);

                    }

                })

            }

        });

        //process permission checkbox values
        function permissionParams() {
            var checkboxes = $('.acl_permission');
            var permissionDictionary = {};
            checkboxes.each(function(idx, el) {
                if ($(this).is(':checked')) {

                    var groupId = $(this).attr('data-id')

                    if (!permissionDictionary[groupId]) {
                        permissionDictionary[groupId] = ""
                    }

                    permissionDictionary[groupId] = permissionDictionary[groupId] + $(this).val()
                }
            });

            $('#permission').val(JSON.stringify(permissionDictionary))
        }

        //Employe ID Generator
        function employeeID(lenght) {
            return Array.from(Array(lenght), () => Math.floor(Math.random() * 36).toString(36)).join('');
        }
    });
</script>