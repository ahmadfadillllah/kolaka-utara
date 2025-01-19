<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<!--footer -->

		<!-- end footer -->
	</div>
	<!-- end wrapper -->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
			<hr/>
			<p class="mb-0">Gaussian Texture</p>
			  <hr>

			  <ul class="switcher">
				<li id="theme1"></li>
				<li id="theme2"></li>
				<li id="theme3"></li>
				<li id="theme4"></li>
				<li id="theme5"></li>
				<li id="theme6"></li>
			  </ul>
               <hr>
			  <p class="mb-0">Gradient Background</p>
			  <hr>

			  <ul class="switcher">
				<li id="theme7"></li>
				<li id="theme8"></li>
				<li id="theme9"></li>
				<li id="theme10"></li>
				<li id="theme11"></li>
				<li id="theme12"></li>
			  </ul>
		</div>
	</div>
	<!--end switcher-->
	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('dashboard') }}/code.jquery.com/jquery-3.5.1.js"></script>
	{{-- <script src="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/js/jquery.min.js"></script> --}}
	<script src="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/js/popper.min.js"></script>
	<script src="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/js/bootstrap.min.js"></script>
	<!--plugins-->
	<script src="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/plugins/select2/js/select2.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/44.1.0/ckeditor5.umd.js" crossorigin></script>

	<script>
		$('.single-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
		$('.multiple-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
	</script>
    {{-- Datatable --}}
    <script src="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<!-- Vector map JavaScript -->
	<script src="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
	<script src="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
	<script src="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
	<script src="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
	<script src="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
	<script src="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/js/index.js"></script>
	<!-- App JS -->
    <script>
		$(document).ready(function () {
			//Default data table
			$('#example').DataTable();

			table.buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
		});
	</script>
	<script src="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/js/app.js"></script>

	<script>
		new PerfectScrollbar('.dashboard-social-list');
		new PerfectScrollbar('.dashboard-top-countries');
	</script>


</body>
</html>
