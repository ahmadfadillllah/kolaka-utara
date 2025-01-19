<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>{{ $title }} | {{ config('app.name') }}</title>
	<!--favicon-->
	<link rel="icon" href="{{ asset('home') }}/assets/img/logo-kolaka.png" type="image/png" />
	<!-- Vector CSS -->
	<link href="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    {{-- Datatables --}}
    <link href="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
	<link href="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/plugins/datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
	<!--plugins-->
	<link href="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/plugins/select2/css/select2.min.css" rel="stylesheet" />
	<link href="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
	<link href="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/css/pace.min.css" rel="stylesheet" />
	<script src="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&amp;family=Roboto&amp;display=swap" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/css/icons.css" />
	<!-- App CSS -->
	<link rel="stylesheet" href="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/css/app.css" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
    <script src="https://cdn.tiny.cloud/1/gxmtzv4dn9csj2fblc3ryrad5zei2g8c8luq2nojvqa4fy2h/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>


</head>

<body class="bg-theme bg-theme9">
	<!-- wrapper -->
	<div class="wrapper">
        @include('notification.index')
