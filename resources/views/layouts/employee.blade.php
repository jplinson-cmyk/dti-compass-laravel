<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Joseph Remetio">
    <meta name="generator" content="">
    <title>DTI COMPASS</title>

    <!-- Bootstrap core CSS -->
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .float-right {
        float: right;
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

</head>
<body>

  <div class="wrapper" id = "wrapper">

    <div>
      @include('layouts.partials.employee-sidebar') 
    </div>
    <div  class="content-header  fixed-top" style = "height:70px;background-color:blue;;z-index:-1">
      test
    </div>   
    <div id="content" class="page-content-wrapper">
      <main class="container-fluid mt-5">
          @yield('content')
      </main>

    </div>
  </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>    

    <script>
      $(document).ready(function () {

        $('#sidebarCollapse').on('click', function () {
          $('#sidebar').toggleClass('active');
        });

      });
    </script>
    @section("scripts")

    @show
  </body>
</html>