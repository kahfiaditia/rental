<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Leo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A premium admin dashboard template by themesbrand" name="description" />
    <meta content="Mannatthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('admin/images/car.png') }}">

    <!-- DataTables -->
    <link href="{{ URL::asset('admin/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ URL::asset('admin/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ URL::asset('admin/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- App css -->
    <link href="{{ URL::asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('admin/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('admin/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('admin/css/style.css') }}" rel="stylesheet" type="text/css" />

    <!-- Plugins css -->
    <link href="{{ URL::asset('admin/plugins/timepicker/tempusdominus-bootstrap-4.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('admin/plugins/timepicker/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin/plugins/clockpicker/jquery-clockpicker.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('admin/plugins/colorpicker/asColorPicker.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ URL::asset('admin/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ URL::asset('admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}"
        rel="stylesheet">
    <link href="{{ URL::asset('admin/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}"
        rel="stylesheet">
    <link href="{{ URL::asset('admin/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css') }}"
        rel="stylesheet" />
</head>

<body>
    @include('sweetalert::alert')
    <!-- Top Bar Start -->
    @include('backoffice.layouts.header')
    <!--end page-wrapper-img-->

    <div class="page-wrapper">
        <div class="page-wrapper-inner">

            <!-- Left Sidenav -->
            @include('backoffice.layouts.sidebar')
            <!-- end left-sidenav-->

            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    @yield('container')
                    <!-- end row -->
                </div>
                <!-- container -->

                <footer class="footer text-center text-sm-left">
                    &copy; 2023
                </footer>
            </div>
            <!-- end page content -->
        </div>
        <!--end page-wrapper-inner -->
    </div>
    <!-- end page-wrapper -->

    <!-- jQuery  -->
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('admin/js/waves.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.slimscroll.min.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('admin/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/buttons.colVis.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('admin/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/pages/jquery.datatable.init.js') }}"></script>

    <!-- Parsley js -->
    <script src="{{ asset('admin/plugins/parsleyjs/parsley.min.js') }}"></script>
    <script src="{{ asset('admin/pages/jquery.validation.init.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.core.js') }}"></script>

    <!-- Plugins js -->
    <script src="{{ asset('admin/plugins/moment/moment.js') }}"></script>
    <script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('admin/plugins/timepicker/tempusdominus-bootstrap-4.js') }}"></script>
    <script src="{{ asset('admin/plugins/timepicker/bootstrap-material-datetimepicker.js') }}"></script>
    <script src="{{ asset('admin/plugins/clockpicker/jquery-clockpicker.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/colorpicker/jquery-asColor.js') }}"></script>
    <script src="{{ asset('admin/plugins/colorpicker/jquery-asGradient.js') }}"></script>
    <script src="{{ asset('admin/plugins/colorpicker/jquery-asColorPicker.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset('admin/pages/jquery.forms-advanced.js') }}"></script>

    <!-- jQuery  -->
    <script src="{{ asset('admin/plugins/tippy/tippy.all.min.js') }}"></script>
    <script src="{{ asset('admin/pages/jquery.tooltipster.js') }}"></script>
    <script src="{{ asset('admin/plugins/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('admin/pages/jquery.form-editor.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('admin/js/app.js') }}"></script>

    <script src="{{ asset('admin/alert.js') }}"></script>
    <script>
        $('.delete_confirm').on('click', function(event) {
            event.preventDefault();
            Swal.fire({
                title: 'Hapus Data',
                text: 'Ingin menghapus data?',
                icon: 'question',
                showCloseButton: true,
                showCancelButton: true,
                cancelButtonText: "Batal",
                focusConfirm: false,
            }).then((value) => {
                if (value.isConfirmed) {
                    $(this).closest("form").submit()
                }
            });
        });

        $('.logout').on('click', function(event) {
            event.preventDefault();
            Swal.fire({
                title: 'Keluar Aplikasi',
                text: 'Ingin keluar aplikasi?',
                icon: 'question',
                showCloseButton: true,
                showCancelButton: true,
                cancelButtonText: "Batal",
                focusConfirm: false,
            }).then((value) => {
                if (value.isConfirmed) {
                    $(this).closest("form").submit()
                }
            });
        });
    </script>
</body>

</html>
