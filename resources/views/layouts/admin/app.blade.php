<!doctype html>
<html dir=""  lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>DarMharaa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />

        <!-- App favicon -->
        <!-- jquery.vectormap css -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jquery.vmap.min.js" integrity="sha512-Zk7h8Wpn6b9LpplWXq1qXpnzJl8gHPfZFf8+aR4aO/4bcOD5+/Si4iNu9qE38/t/j1qFKJ08KWX34d2xmG0jrA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <!-- DataTables -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-bs4/3.2.2/dataTables.bootstrap4.min.css" integrity="sha512-ybdqRiNuVPQYM0P7Oa6eO34/xPCBgfL9xndV+d13ARArKsejpRSNycb31xn8yxGrGQISC0VlagTBhS3SWLBVJw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

        <!-- Responsive datatable examples -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-responsive-bs4/2.4.0/responsive.bootstrap4.min.css" integrity="sha512-Kep8UHrRwnogj5OXG/g6ZXsfOtdFwJBhcEkEKIKZfiiedZmjwVH3JAyPM3Ag4x6xG1DYf+U/Uu/MFCMkQh+eWQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Bootstrap Css -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      
        <!-- Icons Css -->
        <!-- App Css-->
        <link href="{{ asset('assets/backend/css/app.css') }}" id="app-style" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css" >

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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js" integrity="sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     
      
        <script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.7/metisMenu.min.js" integrity="sha512-o36qZrjup13zLM13tqxvZTaXMXs+5i4TL5UWaDCsmbp5qUcijtdCFuW9a/3qnHGfWzFHBAln8ODjf7AnUNebVg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>  {{-- <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/simplebar/6.2.1/simplebar.min.js" integrity="sha512-pnw039YCj58sPbPxVAzem8Z3dTgRgq0n6QJZDc+3PV2ScytsX6Jx0pMiLZRYofXshu4ChX6/rFFgebHQtK4UoA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/node-waves/0.7.6/waves.min.js" integrity="sha512-MzXgHd+o6pUd/tm8ZgPkxya3QUCiHVMQolnY3IZqhsrOWQaBfax600esAw3XbBucYB15hZLOF0sKMHsTPdjLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
       
        
        <!-- apexcharts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.37.0/apexcharts.min.js" integrity="sha512-RLWwcf0Pb2NghIfkaQms354xRV36EYjXLWKSN8QHiHqNq3KGj0DjMc9D1zzO7UsREkGU/xCLAJi/hVcKSuZ5Cw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- jquery.vectormap map -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jquery.vmap.min.js" integrity="sha512-Zk7h8Wpn6b9LpplWXq1qXpnzJl8gHPfZFf8+aR4aO/4bcOD5+/Si4iNu9qE38/t/j1qFKJ08KWX34d2xmG0jrA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     
        <!-- Required datatable js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net/2.1.1/jquery.dataTables.min.js" integrity="sha512-CKwcR6t3iAghHw93W7LcmVlSRCoGXiYyjITGKrFyDFqWHt6LIJ3j5f1dSjvL+OJbvG0KvPgP/zBEOikHUIu+3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-bs4/3.2.2/dataTables.bootstrap4.min.js" integrity="sha512-zjnVNy8zmH0JujmJgrADeEjpVIrafOQm2iQSbKk5dAiUBa18xYI2035PpojcvHKLKgDHPUdA3FoxneTC/RooGw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


        <!-- Responsive examples -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-responsive/2.4.0/dataTables.responsive.min.js" integrity="sha512-UEtHfW1dblwNO8FPaTWSG2V3Jv9omJDhGWFdVFaSF8wd9TlVk0Nyk47RgoTJ03cA2Hfz8rjOJ8xhJpiNIJcErw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-responsive-bs4/2.4.0/responsive.bootstrap4.min.js" integrity="sha512-6GfG2kVDP+eERUuPOyDw9XFsW24wvdQo6bDFab6ragV8z3PY8KwglTXyRJJ+AOGlDBTYPdFUvvtjFqBX0997Tw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        

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