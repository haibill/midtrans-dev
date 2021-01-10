<div class="form-group row">
    <label class="font-weight-bold col-md-2">Status</label>
    <div class="col-md-8">
        <select class="form-control" name="status">
            <option value="<?= $result['status'] ?>"><?= $result['status'] ?></option>
            <?php if ($result['status'] == 'ACTIVE') : ?>
                <option value="INACTIVE">INACTIVE</option>
            <?php else : ?>
                <option value="ACTIVE">ACTIVE</option>
            <?php endif; ?>
        </select>
    </div>
</div>