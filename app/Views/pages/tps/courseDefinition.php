<?= $this->extend('layout/tps/mainLayout') ?>

<?= $this->section('pageCss') ?>
    <!-- BEGIN PAGE LEVEL STYLES -->
   
    <link href="<?= base_url() ?>/assets/plugins/custom/datatables/datatables.bundle.css?v=7.2.9" rel="stylesheet" type="text/css"/>
        <!-- END PAGE LEVEL STYLES -->
<?= $this->endSection() ?>

<?= $this->section("content") ?>
    <?= $this->include('partials/tps/courseDefinition') ?>
<?= $this->endSection() ?>


<?= $this->section('pageJs') ?>
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?= base_url() ?>/script/tps/plugins.bundle.js"></script>
    <script src="<?= base_url() ?>/assets/js/pages/crud/datatables/basic/basic.js"></script>
    <script src="<?= base_url() ?>/assets/js/pages/crud/ktdatatable/base/data-local.js?v=7.2.9"></script>

    <script src="<?= base_url() ?>/assets/plugins/custom/datatables/datatables.bundle.js?v=7.2.9"></script>
    
    
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:1070954,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');

        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1400
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#3699FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#E4E6EF",
                        "dark": "#181C32"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1F0FF",
                        "secondary": "#EBEDF3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#3F4254",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32"
                }
            },
            "font-family": "Poppins"
        };
    </script>

<?= $this->endSection() ?>








