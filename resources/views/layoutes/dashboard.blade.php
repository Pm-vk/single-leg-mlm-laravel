<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="../assets/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>
@yield('title')
</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
<link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="/assets/css/paper-dashboard.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    /* Global Universal Responsiveness Fixes */
    html, body {
        max-width: 100vw !important;
        overflow-x: hidden !important;
    }
    
    /* Make all tables horizontally scrollable on small screens */
    .table-responsive, table {
        display: block !important;
        width: 100% !important;
        overflow-x: auto !important;
        -webkit-overflow-scrolling: touch !important;
    }
    
    /* Card Layout & Metric Spacing */
    .card {
        margin-bottom: 20px !important;
        border-radius: 8px !important;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05) !important;
    }
    .card .numbers {
        font-size: 1.5rem !important;
        text-align: right;
        word-break: break-word;
    }
    .card .numbers p {
        font-size: 11px !important;
        font-weight: 600;
        text-transform: uppercase;
        color: #9A9A9A;
        margin-bottom: 2px;
        line-height: 1.2;
    }
    .card .icon-big {
        font-size: 2.2em !important;
        min-height: 45px;
    }
    .card .icon-big i {
        font-size: 36px !important;
    }
    .card .content {
        padding: 15px !important;
    }

    /* Navbar & Header Mobile Adjustments */
    .navbar .container-fluid {
        padding-left: 15px !important;
        padding-right: 15px !important;
    }
    .navbar-brand {
        font-size: 14px !important;
        max-width: 180px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    /* Mobile & Tablet Media Queries */
    @media (max-width: 991px) {
        .main-panel {
            width: 100% !important;
            float: none !important;
        }
        .sidebar {
            display: none;
        }
        .nav-open .sidebar {
            display: block !important;
            position: fixed !important;
            top: 0;
            left: 0;
            width: 260px !important;
            height: 100% !important;
            z-index: 1050 !important;
            background: #fff !important;
            box-shadow: 0 0 20px rgba(0,0,0,0.2) !important;
        }
        .card .numbers {
            text-align: left !important;
            margin-top: 10px;
        }
        .content {
            padding: 15px 10px !important;
        }
        .cotainer, .container {
            padding-left: 10px !important;
            padding-right: 10px !important;
        }
    }

    @media (max-width: 576px) {
        h1, h2, h3, .h1, .h2, .h3 {
            font-size: 1.4rem !important;
        }
        .btn {
            width: 100% !important;
            margin-bottom: 8px !important;
        }
        .form-control {
            font-size: 14px !important;
        }
    }
</style>


</head>

 <body class="">
  <div class="wrapper ">
    @include('layoutes.sidebar')
  <div class="main-panel">
    @include('layoutes.header')
    @yield('content')
    @include('layoutes.footer')
</div>
</div>
<!-- Core JS Files -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
    $("#datepicker_from").datepicker({
        changeMonth: true,
        changeYear: true,
        format: 'DD-MM-YYYY',
        startDate: '01-10-2017',
       onSelect: function (dateText) {
         $("#datepicker_to").datepicker('option', 'minDate', dateText);
       }
    });
    $("#datepicker_to").datepicker({
        changeMonth: true,
        changeYear: true,
        format: 'DD-MM-YYYY',
        endDate: '01-11-2017',
    });
</script>

<script src="/assets/js/core/jquery.min.js"></script>
<script src="/assets/js/core/popper.min.js"></script>
<script src="/assets/js/core/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
</body>

</html>