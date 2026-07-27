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
    /* Fix dashboard stats card overflow & layout */
    .card .numbers {
        font-size: 1.6rem !important;
        text-align: right;
        word-break: break-word;
        white-space: nowrap;
    }
    .card .numbers p {
        font-size: 11px !important;
        font-weight: 600;
        text-transform: uppercase;
        color: #9A9A9A;
        margin-bottom: 2px;
        white-space: normal;
        line-height: 1.2;
    }
    .card .icon-big {
        font-size: 2.5em !important;
        min-height: 50px;
    }
    .card .icon-big i {
        font-size: 40px !important;
    }
    .card .content {
        padding: 15px 15px 10px 15px !important;
    }
    .sidebar .sidebar-wrapper {
        overflow-x: hidden !important;
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