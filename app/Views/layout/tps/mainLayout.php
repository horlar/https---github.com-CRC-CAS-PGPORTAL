<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head>
        <?= $this->renderSection("meta") ?>
		<?= $this->include('partials/tps/assets/globalcss') ?>
		<?= $this->renderSection("pageCss") ?>
	</head>
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		
		<?= $this->include('partials/tps/mobile') ?>
		
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				<?= $this->include('partials/tps/sidebar') ?>

				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					
					<?= $this->include('partials/tps/header') ?>
					
					<!--begin::Content-->
					<?= $this->renderSection("content") ?>
					
					<!--begin::Footer-->
					<?= $this->include('partials/tps/footer') ?>
				</div>
			</div>
		</div>
		
		<?= $this->include('partials/tps/assets/globaljs') ?>
		<?= $this->renderSection("pageJs") ?>
	</body>
</html>