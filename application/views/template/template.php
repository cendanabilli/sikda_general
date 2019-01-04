<?php //echo $contents; ?>
<?php //$this->load->view('template/footer');  ?>
<!DOCTYPE html>

<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Sikda | General</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

		<!--end::Web font -->

		<!--begin::Global Theme Styles -->
		<link href="<?php echo base_url() ?>assets/template/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="<?php //echo base_url() ?>assets/template/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
		<link href="<?php echo base_url() ?>assets/template/demo/demo9/base/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="<?php //echo base_url() ?>assets/template/demo/demo9/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Global Theme Styles -->

		<!--begin::Page Vendors Styles -->
		<link href="<?php echo base_url() ?>assets/template/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="<?php //echo base_url() ?>assets/template/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<link href="<?php echo base_url() ?>assets/template/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles -->
		<!-- <link rel="shortcut icon" href="<?php //echo base_url() ?>assets/demo/demo9/media/img/logo/favicon.ico" /> -->
	</head>

			<!--begin::Global Theme Bundle -->
		<script src="<?php echo base_url() ?>assets/template/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="<?php echo base_url() ?>assets/template/demo/demo9/base/scripts.bundle.js" type="text/javascript"></script>


		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors -->
		<script src="<?php echo base_url() ?>assets/template/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
		<script src="<?php echo base_url() ?>assets/template/app/js/bootstrap-datepicker.js" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts -->

			<!-- jQuery ScrollTo Plugin -->
		
		<!--end::Page Scripts -->

		<!-- begin::Page Loader -->
		<script>
			$(window).on('load', function() {
				$('body').removeClass('m-page--loading');
			});
		</script>

		<!-- end::Page Loader -->

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m--skin- m-page--loading-enabled m-page--loading m-content--skin-light m-header--fixed m-header--fixed-mobile m-aside-left--offcanvas-default m-aside-left--enabled m-aside-left--fixed m-aside-left--skin-light m-aside--offcanvas-default">

		<!-- begin::Page loader -->
		<div class="m-page-loader m-page-loader--base">
			<div class="m-blockui">
				<span>Please wait...</span>
				<span>
					<div class="m-loader m-loader--brand"></div>
				</span>
			</div>
		</div>

		<!-- end::Page Loader -->

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- BEGIN: Header -->
<?php $this->load->view('template/header');  ?>
			
			<!-- END: Header -->

			<!-- BEGIN: Left Aside -->
<?php $this->load->view('template/sidebar');  ?>
			
<script>
	$.notify({
	title: '<strong>Heads up!</strong>',
	message: 'You can use any of bootstraps other alert styles as well by default.'
},{
	type: 'success',placement: {
		from: "bottom",
		align: "right"
	},
});
</script>
			<!-- END: Left Aside -->

			<!-- begin::Body -->
			<!-- <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor-desktop m-grid--desktop m-body">
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-container m-container--responsive m-container--xxl m-container--full-height">
					<div class="m-grid__item m-grid__item--fluid m-wrapper" id="content">
					<?php if($this->session->flashdata('alert')){
						foreach ($this->session->flashdata('alert') as $key => $value) {
						# code...
					 ?>
						<div role="alert" class="alert alert-<?php echo $value['color'];  ?> alert-dismissible fade show   m-alert m-alert--air">
							<button aria-label="Close" data-dismiss="alert" class="close" type="button">
							</button>
							<strong><?php echo $value['status'];  ?></strong> <?php echo $value['message'];  ?>
						</div>
					<?php }
				} ?>
						<?php echo $contents; ?>
					</div>
				</div>
			</div> -->

			<!-- end:: Body -->

			<!-- begin::Footer -->
<?php $this->load->view('template/footer');  ?>
			

			<!-- end::Footer -->
		</div>

		<!-- end:: Page -->

		<!-- begin::Quick Sidebar -->
		

		<!-- end::Quick Sidebar -->

		<!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>

		<!-- end::Scroll Top -->

	


	</body>

	<!-- end::Body -->
</html>

