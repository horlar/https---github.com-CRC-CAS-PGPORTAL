
<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head>
		<?= $this->include('partials/tas/meta') ?>

		<!--begin::Page Custom Styles(used by this page)-->
		<?= $this->include('partials/tas/assets/globalcss') ?>

		<?= $this->renderSection("pageCss") ?>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
				<!--begin::Aside-->
				<div class="login-aside d-flex flex-column flex-row-auto" style="background-color: #F2C98A;">
					<!--begin::Aside Top-->
					<div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
						<!--begin::Aside header-->
						<a href="#" class="text-center mb-10">
							<img src="assets/media/logos/logo-letter-1.png" class="max-h-70px" alt="" />
						</a>
						<!--begin::Aside title-->
						<h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg" style="color: #986923;">Discover Amazing Metronic
						<br />with great build tools</h3>
					</div>
					<!--begin::Aside Bottom-->
					<div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url(assets/media/svg/illustrations/login-visual-1.svg)"></div>
				</div>
				<!--begin::Content-->
				<div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
					
					<!--begin::Content body-->
					<?= $this->renderSection("account") ?>

					<!--begin::Content footer-->
					<div class="d-flex justify-content-lg-start justify-content-center align-items-end py-7 py-lg-0">
						<a href="#" class="text-primary font-weight-bolder font-size-h5">Terms</a>
						<a href="#" class="text-primary ml-10 font-weight-bolder font-size-h5">Plans</a>
						<a href="#" class="text-primary ml-10 font-weight-bolder font-size-h5">Contact Us</a>
					</div>
				</div>
			</div>
		</div>
		
        <?= $this->include('partials/tas/assets/globaljs') ?>
		<!--begin::Page Scripts(used by this page)-->
		
	</body>
	<!--end::Body-->
    <?=$this->renderSection("account_js") ?>
</html>
