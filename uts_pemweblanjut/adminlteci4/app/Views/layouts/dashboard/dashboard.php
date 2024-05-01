<?= $this->extend('index') ?>
<body class="sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">
<!-- navbar -->
<?= view('partial/top-nav') ?>
<?= $this->renderSection('top-nav') ?>
<?= view('partial/sidebar') ?>
<?= $this->renderSection('sidebar') ?>
<?= view('layouts/dashboard/content') ?>
<?= $this->renderSection('content') ?>



<!-- footer -->
<?= view('partial/footer') ?>
<?= $this->renderSection('footer') ?>

</div>

<?= $this->renderSection('scripts') ?>
<?= $this->renderSection('dashboard-script') ?>








