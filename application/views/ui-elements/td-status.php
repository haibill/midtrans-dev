<td style="text-align: center;">
    <?php if ($status == 'ACTIVE') : ?>
        <span class="badge badge-success"><?= $status ?></span>
    <?php else : ?>
        <span class="badge badge-danger"><?= $status ?></span>
    <?php endif; ?>
</td>