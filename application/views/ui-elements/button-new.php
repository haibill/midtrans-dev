<div class="text-right">
    <?php $tooltips = isset($submenu) ? "Add " . $submenu : 'Add Data'; ?>
    <a href="<?= $url; ?>" class="btn btn-primary mb-3" data-toggle="tooltip" data-placement="top" title="<?= $tooltips ?>">
        <i class="icon fas fa-plus"></i>
        New
    </a>
</div>