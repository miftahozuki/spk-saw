<!doctype html>
<html class="no-js')}}" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistem Pendukung Keputusan </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->

    <!-- plugin css')}} file  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/plugin/datatables/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/plugin/datatables/dataTables.bootstrap5.min.css')}}">

    <!-- project css')}} file  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/ebazar.style.min.css')}}">
</head>
<body>
    @include('frontend.layouts.navbar')

    <!-- Jquery Core js')}} -->
    <script src="{{ asset('frontend/assets/bundles/libscripts.bundle.js')}}"></script>

    <!-- Plugin js')}} -->
    <script src="{{ asset('frontend/assets/bundles/apexcharts.bundle.js')}}"></script>
    <script src="{{ asset('frontend/assets/bundles/dataTables.bundle.js')}}"></script>  

    <!-- Jquery Page js')}} -->
    <script src="{{ asset('frontend/assets/js/template.js')}}"></script> 
    <script src="{{ asset('frontend/assets/js/page/index.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js')}}?key=AIzaSyB1Jr7axGGkwvHRnNfoOzoVRFV3yOPHJEU&callback=myMap"></script>  
    <script>
        $('#myDataTable')
        .addClass( 'nowrap')
        .dataTable( {
            responsive: true,
            columnDefs: [
                { targets: [-1, -3], className: 'dt-body-right' }
            ]
        });
    </script>
</body>
</html>