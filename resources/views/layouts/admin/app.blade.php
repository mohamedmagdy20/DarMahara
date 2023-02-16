<!doctype html>
<html dir="rtl"  lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>DarMharaa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        {{-- <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}"> --}}
        <!-- jquery.vectormap css -->
        <link href="{{ asset('assets/backend/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <!-- DataTables -->
        <link href="{{ asset('assets/backend/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"> --}}


        <!-- Responsive datatable examples -->
        <link href="{{ asset('assets/backend/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />  
        
        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/backend/css/app.css') }}" id="app-style" rel="stylesheet" type="text/css" />

        {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css" > --}}

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet"> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />        
    </head>

    <body data-topbar="dark">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
          @include('layouts.admin.header')

            <!-- ========== Left Sidebar Start ========== -->
           @include('layouts.admin.sidebar')
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

               @yield('admin')
                <!-- End Page-content -->

                @include('layouts.admin.footer')
                
                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

           <!-- JAVASCRIPT -->
           <script src="{{ asset('assets/backend/libs/jquery/jquery.min.js') }}"></script>
           <script src="{{ asset('assets/backend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
           <script src="{{ asset('assets/backend/libs/metismenu/metisMenu.min.js') }}"></script>
           <script src="{{ asset('assets/backend/libs/simplebar/simplebar.min.js') }}"></script>
           <script src="{{ asset('assets/backend/libs/node-waves/waves.min.js') }}"></script>
           {{-- <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> --}}
           
           <!-- apexcharts -->
           {{-- <script src="{{ asset('assets/backend/libs/apexcharts/apexcharts.min.js') }}"></script> --}}
   
           <!-- jquery.vectormap map -->
           <script src="{{ asset('assets/backend/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
           <script src="{{ asset('assets/backend/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}"></script>
   
        <!-- App js -->
        <script src="{{ asset('assets/backend/js/pages/dashboard.init.js') }}"></script>
        <script src="{{ asset('assets/backend/js/app.js') }}"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        
<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>

        <!--tinymce js-->
        {{-- <script src="{{ asset('backend/assets/libs/tinymce/tinymce.min.js') }} "></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.3.1/tinymce.min.js" integrity="sha512-eV68QXP3t5Jbsf18jfqT8xclEJSGvSK5uClUuqayUbF5IRK8e2/VSXIFHzEoBnNcvLBkHngnnd3CY7AFpUhF7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- init js -->
        <script src="{{ asset('assets/backend/js/pages/form-editor.init.js') }} "></script>

         <!-- Required datatable js -->
        {{-- <script src="{{ asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script> --}}

            <!-- Datatable init js -->
        {{-- <script src="{{ asset('backend/assets/js/pages/datatables.init.js') }}"></script> --}}
        {{-- <script src="{{ asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script> --}}
        {{-- <script src="{{asset('backend/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script> --}}

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script src="{{ asset('assets/backend/js/code.js') }}"></script>
<script src="{{ asset('assets/backend/js/validate.min.js') }}"></script>

 
@yield('script')
<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js" ></script>


<script>
       $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>

    </body>

</html>