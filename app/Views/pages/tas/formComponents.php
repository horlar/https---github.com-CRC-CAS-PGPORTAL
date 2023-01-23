<?= $this->extend('layout/tas/mainLayout') ?>

<?= $this->section("content") ?>
    <?= $this->include('partials/tas/formComponents') ?>
<?= $this->endSection() ?>

<?= $this->section("pageJs") ?>
    <script src="<?= base_url().'/script/tas/formComponents.js'; ?>"></script>
<?= $this->endSection() ?>