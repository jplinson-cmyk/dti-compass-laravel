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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;500&display=swap" rel="stylesheet">
    <style id="antiClickjack">
        body{display:none !important;}
    </style>

</head>

<body>

    <div class="d-flex">
        <div class="mt-5">
            @include('layouts.partials.employee-sidebar')
        </div>

        <div id="content" class="page-content-wrapper" style="width:100%">
            <main class="container-fluid mt-5">
                @include('layouts.partials.banner')

                @yield('content')
            </main>
            <div class="footer">
                @include('auth.partials.footer')
            </div>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>
    

    <script type="text/javascript"> 
        if (self === top) {
            var antiClickjack = document.getElementById("antiClickjack");
            antiClickjack.parentNode.removeChild(antiClickjack);
        } else {
            top.location = self.location;
        }
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
            document.getElementById("sidebar").style.width = "300px";
            document.getElementById("content").style.marginLeft = "300px";
            document.getElementById("toggleButton").innerHTML = '<i class="fas fa-arrow-left"></i>'; // Right arrow icon
            isOpen = true;
        }

        function closeNav() {
            document.getElementById("sidebar").style.width = "0";
            document.getElementById("content").style.marginLeft = "0";
            document.getElementById("toggleButton").innerHTML = '<i class="fas fa-arrow-right"></i>'; // Left arrow icon
            isOpen = false;
        }

        document.getElementById("toggleButton").innerHTML = '<i class="fas fa-arrow-left"></i>';

        document.getElementById("toggleButton").onclick = toggleNav;
        $(function() {
            $('[data-bs-toggle="tooltip"]').tooltip()
        })
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
