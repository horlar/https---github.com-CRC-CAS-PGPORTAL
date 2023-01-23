<?= $this->extend('layout/tps/mainLayout') ?>

<?= $this->section("content") ?>
    <?= $this->include('partials/tps/createProfile') ?>
<?= $this->endSection() ?>

<?= $this->section("pageJs") ?>
    <script src="<?= base_url().'/script/tps/profile.js'; ?>"></script>
<?= $this->endSection() ?>