<?= $this->extend('layout/tas/mainLayout') ?>

<?= $this->section("content") ?>
    <?= $this->include('partials/tas/createProfile') ?>
<?= $this->endSection() ?>

<?= $this->section("pageJs") ?>
    <script src="<?= base_url().'/script/tas/profile.js'; ?>"></script>
<?= $this->endSection() ?>