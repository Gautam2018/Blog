<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>Dashboard | UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
 
        <link rel="shortcut icon" href="{{asset('/assets/images/favicon.ico')}}">

          <!-- third party css -->
          <link href="{{asset('/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
          <link href="{{asset('/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
          <link href="{{asset('/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
          <link href="{{asset('/assets/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
          <!-- third party css end -->

        <!-- Plugins css -->
        <link href="{{asset('/assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/assets/libs/selectize/css/selectize.bootstrap3.css')}}" rel="stylesheet" type="text/css" />
        
        <!-- App css -->
        <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="{{asset('/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

        <link href="{{asset('/assets/css/bootstrap-dark.min.css')}}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
        <link href="{{asset('/assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />

        <!-- icons -->
        <link href="{{asset('/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

        <!-- Begin page -->
        <div id="wrapper">

            @include('admin.include.topbar')

            @include('admin.include.sidebar')

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    @yield('admin-content')

                    <!-- Start Content-->
                    
                </div> <!-- content -->

                

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

       

        
        <!-- Vendor js -->
        <script type="text/javascript" src="{{asset('/assets/js/vendor.min.js') }}"></script>

        <script type="text/javascript" src="{{asset('/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
        {{-- <script src="../assets/js/pages/datatables.init.js"></script> --}}
        <script type="text/javascript" src="{{asset('/assets/js/pages/datatables.init.js') }}"></script>

        <!-- Plugins js-->
        <script type="text/javascript" src="{{asset('/assets/libs/flatpickr/flatpickr.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

        <script type="text/javascript" src="{{asset('/assets/libs/selectize/js/standalone/selectize.min.js') }}"></script>


        <!-- Dashboar 1 init js-->
        <script type="text/javascript" src="{{asset('/assets/js/pages/dashboard-1.init.js') }}"></script>


        <!-- App js-->
        <script type="text/javascript" src="{{asset('/assets/js/app.min.js') }}"></script>
        
    </body>
</html>