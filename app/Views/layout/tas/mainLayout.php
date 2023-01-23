<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head>
        <?= $this->renderSection("meta") ?>
		<?= $this->include('partials/tas/assets/globalcss') ?>
		<?= $this->renderSection("pageCss") ?>
	</head>
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		
		<?= $this->include('partials/tas/mobile') ?>
		
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				<?= $this->include('partials/tas/sidebar') ?>

				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					
					<?= $this->include('partials/tas/header') ?>
					
					<!--begin::Content-->
					<?= $this->renderSection("content") ?>
					
					<!--begin::Footer-->
					<?= $this->include('partials/tas/footer') ?>
				</div>
			</div>
		</div>
		
		<?= $this->include('partials/tas/assets/globaljs') ?>
		<?= $this->renderSection("pageJs") ?>
	</body>
</html>