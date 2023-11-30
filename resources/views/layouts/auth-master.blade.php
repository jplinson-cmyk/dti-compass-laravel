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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

    

</head>
<body class="text-center">
    
    <main class="form-signin">

        @yield('content')
        
    </main>
    

</body>
</html>