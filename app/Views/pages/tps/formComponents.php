<?= $this->extend('layout/tps/mainLayout') ?>

<?= $this->section("content") ?>
    <?= $this->include('partials/tps/formComponents') ?>
<?= $this->endSection() ?>

<?= $this->section("pageJs") ?>
    <script src="<?= base_url().'/script/tps/formComponents.js'; ?>"></script>
<?= $this->endSection() ?>