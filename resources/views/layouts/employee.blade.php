<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Joseph Remetio">
    <meta name="generator" content="">
    <title>DTI COMPASS</title>
    <link rel="icon" type="image/png" href="{!! url('/images/dti-logo.ico') !!}">

    <!-- Bootstrap core CSS -->
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">

     <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

</head>

<body>

    <div class="d-flex" id="wrapper">

        <div class="mt-5">
            @include('layouts.partials.employee-sidebar')
        </div>

        <div id="content" class="page-content-wrapper">
            <main class="container-fluid mt-5">
                <span id="toggleButton" style="font-size:30px;cursor:pointer" onclick="toggleNav()">&times;</span>
                @yield('content')
            </main>
        </div>

        
    </div>

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                <svg class="bi" width="30" height="24">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <span class="mb-3 mb-md-0 text-body-secondary">© 2023 DTI COMPASS</span>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>

    <script>
        var isOpen = true;

        function toggleNav() {
            if (isOpen) {
                closeNav();
            } else {
                openNav();
            }
        }

        function openNav() {
            document.getElementById("sidebar").style.width = "250px";
            document.getElementById("content").style.marginLeft = "250px";
            document.getElementById("toggleButton").innerHTML = "&times;";
            isOpen = true;
        }

        function closeNav() {
            document.getElementById("sidebar").style.width = "0";
            document.getElementById("content").style.marginLeft = "0";
            document.getElementById("toggleButton").innerHTML = "&#9776;";
            isOpen = false;
        }

        document.getElementById("toggleButton").innerHTML = "&times;";

        document.getElementById("toggleButton").onclick = toggleNav;
    </script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/655d87a5d600b968d315c441/1hfqljo47';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    @section('scripts')

    @show
</body>

</html>
