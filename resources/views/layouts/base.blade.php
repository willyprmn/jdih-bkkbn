<!doctype html>
<html class="fixed">

<head>

	<!-- Basic -->
	<meta charset="UTF-8">

	<meta name="keywords" content="JDIH BKKBN" />
	<meta name="description" content="Jaringan Dokumentasi Informasi Hukum">
	<meta name="author" content="BIHUKOR BKKBN">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="/assets/porto/vendor/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="/assets/porto/vendor/animate/animate.css">

	<link rel="stylesheet" href="/assets/porto/vendor/font-awesome/css/font-awesome.css" />
	<link rel="stylesheet" href="/assets/porto/vendor/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="/assets/porto/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

	<!-- Specific Page Vendor CSS -->
	<link rel="stylesheet" href="/assets/porto/vendor/select2/css/select2.css" />
	<link rel="stylesheet" href="/assets/porto/vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />
	<link rel="stylesheet" href="/assets/porto/vendor/datatables/media/css/dataTables.bootstrap4.css" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="/assets/porto/css/theme.css" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="/assets/porto/css/skins/default.css" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="/assets/porto/css/custom.css">

	<!-- Head Libs -->
	<script src="/assets/porto/vendor/modernizr/modernizr.js"></script>

	@livewireStyles



</head>

<body>

	{{ $slot }}


	<!-- Vendor -->
	<script src="/assets/porto/vendor/jquery/jquery.js"></script>
	<script src="/assets/porto/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
	<script src="/assets/porto/vendor/popper/umd/popper.min.js"></script>
	<script src="/assets/porto/vendor/bootstrap/js/bootstrap.js"></script>
	<script src="/assets/porto/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="/assets/porto/vendor/common/common.js"></script>
	<script src="/assets/porto/vendor/nanoscroller/nanoscroller.js"></script>
	<script src="/assets/porto/vendor/magnific-popup/jquery.magnific-popup.js"></script>
	<script src="/assets/porto/vendor/jquery-placeholder/jquery-placeholder.js"></script>

	<!-- Specific Page Vendor -->
	<script src="/assets/porto/vendor/select2/js/select2.js"></script>
	<script src="/assets/porto/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="/assets/porto/vendor/datatables/media/js/dataTables.bootstrap4.min.js"></script>
	<script src="/assets/porto/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js"></script>
	<script src="/assets/porto/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js"></script>
	<script src="/assets/porto/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js"></script>
	<script src="/assets/porto/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js"></script>
	<script src="/assets/porto/vendor/datatables/extras/TableTools/JSZip-2.5.0//jszip.min.js"></script>
	<script src="/assets/porto/vendor/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js"></script>
	<script src="/assets/porto/vendor/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="/assets/porto/js/theme.js"></script>

	<!-- Theme Custom -->
	<script src="/assets/porto/js/custom.js"></script>

	<!-- Theme Initialization Files -->
	<script src="/assets/porto/js/theme.init.js"></script>

	<!-- Examples -->
	<script src="/assets/porto/js/examples/examples.datatables.default.js"></script>
	<script src="/assets/porto/js/examples/examples.datatables.row.with.details.js"></script>
	<script src="/assets/porto/js/examples/examples.datatables.tabletools.js"></script>

	<script src="/assets/porto/js/examples/examples.advanced.form.js"></script>
	@livewireScripts
</body>

</html>