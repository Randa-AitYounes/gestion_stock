<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">
    <!-- Favicon icon -->
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="/assets/icon/icofont/css/icofont.css">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="/assets/pages/flag-icon/flag-icon.min.css">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="/assets/pages/menu-search/css/component.css">
    <!-- Horizontal-Timeline css -->
    <link rel="stylesheet" type="text/css" href="/assets/pages/dashboard/horizontal-timeline/css/style.css">
    <!-- amchart css -->
    <link rel="stylesheet" type="text/css" href="/assets/pages/dashboard/amchart/css/amchart.css">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="/assets/pages/flag-icon/flag-icon.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <!--color css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/color/color-1.css" id="color" />
</head>
<body class="horizontal-fixed">
    @include('layouts.partials._nav')
    @yield('content')
</body>


<!-- Warning Section Ends -->
<!-- Required Jqurey -->
<script type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/bower_components/tether/dist/js/tether.min.js"></script>
<script type="text/javascript" src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="/bower_components/modernizr/modernizr.js"></script>
<script type="text/javascript" src="/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>
<!-- classie js -->
<script type="text/javascript" src="/bower_components/classie/classie.js"></script>
<!-- Rickshow Chart js -->
<script src="/bower_components/d3/d3.js"></script>
<script src="/bower_components/rickshaw/rickshaw.js"></script>
<!-- Morris Chart js -->
<script src="/bower_components/raphael/raphael.min.js"></script>
<script src="/bower_components/morris.js/morris.js"></script>
<!-- Horizontal-Timeline js -->
<script type="text/javascript" src="/assets/pages/dashboard/horizontal-timeline/js/main.js"></script>
<!-- amchart js -->
<script type="text/javascript" src="/assets/pages/dashboard/amchart/js/amcharts.js"></script>
<script type="text/javascript" src="/assets/pages/dashboard/amchart/js/serial.js"></script>
<script type="text/javascript" src="/assets/pages/dashboard/amchart/js/light.js"></script>
<script type="text/javascript" src="/assets/pages/dashboard/amchart/js/custom-amchart.js"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="/bower_components/i18next/i18next.min.js"></script>
<script type="text/javascript" src="/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="/bower_components/jquery-i18next/jquery-i18next.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="/assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="/assets/js/script.js"></script>

</html>