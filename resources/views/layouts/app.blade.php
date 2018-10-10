<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title></title>
    <!-- Favicon-->
    <link rel="icon" href="/dash/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="/dash/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="/dash/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="/dash/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="/dash/css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Turkana <b>East</b> <br> College & University Students Association</a>
            <small></small>
        </div>
        <div class="card">
            <div class="body">
                @yield('auth')
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="/dash/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="/dash/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="/dash/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="/dash/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="/dash/js/admin.js"></script>
    <script src="/dash/js/pages/examples/sign-in.js"></script>
</body>

</html>
