<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="/public/favicon.png" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>NMB Dashboard</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/public/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/public/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/public/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/public/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="/public/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="/public/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="/public/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/public/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="/public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <link href="/public/plugins/purecss-circular-progress-bar-master/css-circular-prog-bar.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="/public/plugins/datatable/css/jquery.dataTables.min.css" />
    <link type="text/css" href="/public/plugins/datatable/css/dataTables.checkboxes.css" rel="stylesheet" />
    <link type="text/css" href="/public/plugins/datatable/css/fixedHeader.dataTables.min.css" rel="stylesheet" />

    <script type="text/javascript" src="/public/js/jspdf.min.js"></script>
    <script type="text/javascript" src="/public/js/html2canvas.js"></script>
    <script type="text/javascript">
    // //Download PDF
    // setTimeout(function() {
    //     var element = document.getElementById("whole");
    
    //     html2canvas(element).then(function(canvas) {
    //             var img = canvas.toDataURL('image/png');
    //             var imgWidth = 250; 
    //             var pageHeight = 297;  
    //             var imgHeight = canvas.height * imgWidth / canvas.width;
    //             var heightLeft = imgHeight;
    //             var doc = new jsPDF('l', 'mm');
    //             doc.internal.scaleFactor = 10;
    //             var position = 0;
    
    //             doc.addImage(img, 'JPEG', 2, position, imgWidth, imgHeight);
    //             heightLeft -= pageHeight;
    
    //             while (heightLeft >= 0) {
    //                 position = heightLeft - imgHeight;
    //                 doc.addPage();
    //                 doc.addImage(img, 'JPEG', 2, position, imgWidth, imgHeight);
    //                 heightLeft -= pageHeight;
    //             }
    //             n =  new Date();
    //             y = n.getFullYear();
    //             m = n.getMonth() + 1;
    //             d = n.getDate();
    //             doc.save(m + "/" + d + "/" + y + "/" + "date_community_report.pdf");
    //             //doc.save("date_fleet_report.pdf");
    //         });
    //     }, 1000);
    </script>
</head>
<body id="whole" onload="window.print()">
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
    <!-- jQuery 2.1.4 -->
    <script src="/public/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/public/bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="/public/plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="/public/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="/public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="/public/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="/public/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="/public/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="/public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="/public/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="/public/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/public/dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/public/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/public/dist/js/demo.js"></script>

    <script src="/public/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="/public/plugins/datatable/js/dataTables.checkboxes.min.js"></script>
    <script src="/public/plugins/datatable/js/dataTables.fixedHeader.min.js"></script>
</body>
</html>
