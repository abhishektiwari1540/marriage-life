<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{{Config("Site.title")}}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{ asset('/css/login.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/css/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/css/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/css/themes/layout/header/base/light.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/css/themes/layout/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/css/themes/layout/brand/dark.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/css/themes/layout/aside/dark.css')}}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{asset('/img/favicon.ico')}}" />
    <script src="{{asset('/js/plugins.bundle.js')}}"></script>
    <script src="{{asset('/js/prismjs.bundle.js')}}"></script>
    <script src="{{asset('/js/sweetalert2.js')}}"></script>
    <script src="{{asset('/js/scripts.bundle.js')}}"></script>
</head>

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <script type="text/javascript">
        function show_message(message, message_type) {
            Swal.fire({
                position: "top-right",
                icon: message_type,
                title: message,
                showConfirmButton: false,
                timer: 8000
            });
        }
    </script>
    @if(Session::has('error'))
    <script type="text/javascript">
        $(document).ready(function(e) {

            show_message("{{{ Session::get('error') }}}", 'error');
        });
    </script>
    @endif
    @if(Session::has('success'))
    <script type="text/javascript">
        $(document).ready(function(e) {
            show_message("{{{ Session::get('success') }}}", 'success');
        });
    </script>
    @endif
    @if(Session::has('flash_notice'))
    <script type="text/javascript">
        $(document).ready(function(e) {
            show_message("{{{ Session::get('flash_notice') }}}", 'success');
        });
    </script>
    @endif
    @yield('content')
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1400
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#3699FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#E4E6EF",
                        "dark": "#181C32"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1F0FF",
                        "secondary": "#EBEDF3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#3F4254",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32"
                }
            },
            "font-family": "Poppins"
        };
    </script>
</body>

</html>