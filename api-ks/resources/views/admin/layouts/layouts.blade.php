<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.web', 'Heysenior') }} - @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Custom fonts for this template-->
    <link rel="apple-touch-icon" sizes="180x180" href=" {{ asset('image/LV-image/apple-touch-icon.png') }}" rel="icon"
        type="imge/png">
    <link rel="icon" type="image/png" sizes="32x32" href=" {{ asset('image/LV-image/favicon-32x32.png') }}"
        rel="icon" type="imge/png">
    <link rel="icon" type="image/png" sizes="16x16" href=" {{ asset('image/LV-image/favicon-16x16.png') }}"
        rel="icon" type="imge/png">
    <link rel="shortcut icon" href=" {{ asset('image/LV-image/favicon.ico') }}">
    <!-- tables -->
    <link href=" {{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <!-- SINGLE UPLOAD IMAGE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('upload-image/single_image.css') }}?v=<?php echo time(); ?>">
    <!-- init folder css-->
    <link href="{{ asset('css/admin.css') }}?v=<?php echo time(); ?>" rel="stylesheet">
    <link href="{{ asset('css/country-age.css') }}?v=<?php echo time(); ?>" rel="stylesheet">
    <!-- end folder css-->
    <!-- Picker color -->
    <link rel="stylesheet" href="{{ asset('picker-color/classic.min.css') }}" />
    <!-- select css -->
    <link href="{{ asset('select/select.css') }}?v=<?php echo time(); ?>" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body id="page-top">
    <div id="wrapper">
        @include('admin.layouts.header')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @extends('admin.layouts.nav')
                @yield('content')
            </div>
            @include('admin.layouts.footer')
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> --}}

    <!-- init color picker -->
    <script src="{{ asset('picker-color/pickr.min.js') }}"></script>
    <!-- end color picker -->

    <!-- init js  -->
    <script src="{{ asset('js.js') }}"></script>
    <!-- end js -->

    <!-- INIT UPLOAD SINGLE IMAGE  -->
    <script src="{{ asset('upload-image/image.js') }}?v=<?php echo time(); ?>"></script>
    <!-- END UPLOAD SINGLE IMAGE  -->

    <!-- Use Bootstrap 4-->
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin/js/sb-admin-2.js') }}"></script>
    <!-- <script src="../public/admin2/js/sb-admin-2.min.js"></script> -->

    <!-- Page level plugins -->
    <script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('admin/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('admin/js/demo/chart-pie-demo.js') }}"></script>
    <script src="{{ asset('admin/js/demo/datatables-demo.js') }}"></script>

    <script src="{{ asset('select/select.js') }}"></script>

    {{-- init folder js --}}
    <script src="{{ asset('js/select.js') }}?v=<?php echo time(); ?>"></script>
    <script src="{{ asset('js/delete.js') }}?v=<?php echo time(); ?>"></script>
    <script src="{{ asset('js/disabled-enabled.js') }}?v=<?php echo time(); ?>"></script>
    <script src="{{ asset('js/texts-buttons-pickers.js') }}?v=<?php echo time(); ?>"></script>
    <script src="{{ asset('js/AGE.js') }}"></script>
    {{-- end folder js --}}

    <script>
        function changeCkh(checkbox) {
            if (typeof checkbox !== 'undefined') {
                if (checkbox.value === "0") {
                    checkbox.value = "1";
                } else {
                    checkbox.value = "0";
                };
            };
        };
    </script>

    <script>
        $('.ac-container button').on('click', () => {
            _this.setValues();
            if (_this.validate() === true) {
                _this.setAge();

                if (_this.age >= settings.minAge) {
                    if (!_this.setStorage('ageVerified', 'true', settings.storageExpires)) {
                        console.log(settings.storage + ' not supported by your browser');
                    }
                    _this.handleSuccess();
                } else {
                    _this.handleUnderAge();
                }
            }
        });
    </script>
    <div>
        <button type="button" style="display: none;" onclick="checkAge();" id="enter">Enter</button>
    </div>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script> --}}
</body>
</html>