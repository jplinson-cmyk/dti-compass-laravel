<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>DTI Compass</title>
    <link rel="icon" type="image/png" href="{!! url('/images/dti-logo.ico') !!}">

    <!-- Bootstrap core CSS -->
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! url('assets/css/signin.css') !!}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Lato:wght@300&family=Poppins:wght@100;400&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;500&display=swap" rel="stylesheet">
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}


</head>

<body>

    <main class="form-signin">

        @yield('content')

    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
    @section('scripts')
    @show
</body>

</html>
