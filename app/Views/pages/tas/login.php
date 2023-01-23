<?= $this->extend('layout/tas/login') ?>

<?= $this->section("pageCss") ?>
    <?= $this->include('partials/tas/assets/logincss') ?>
<?= $this->endSection() ?>

<?= $this->section("account") ?>
    <?= $this->include('partials/tas/login') ?>
<?= $this->endSection() ?>

<?= $this->section("account_js") ?>
<script src="<?= base_url().'/script/tas/account.js'; ?>"></script>
<?= $this->endSection() ?>