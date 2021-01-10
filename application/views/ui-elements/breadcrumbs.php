<div class="app-title">
    <div>
        <h1><i class="fab fa-magento"></i> <?= $submenu; ?></h1>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item">SMAN 1 BINJAI </li>
        <li class="breadcrumb-item"><?= $menu; ?></li>
        <?php if (isset($page)) : ?>
            <li class="breadcrumb-item"><a href="<?= $back; ?>"><?= $submenu; ?></a></li>
            <li class="breadcrumb-item active font-weight-bold"><a href=""><?= $page; ?></a></li>
        <?php else : ?>
            <li class="breadcrumb-item active font-weight-bold"><a href=""><?= $submenu; ?></a></li>
        <?php endif; ?>
    </ul>
</div>
<?= $this->session->flashdata('success') ?>