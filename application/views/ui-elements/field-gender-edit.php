<div class="form-group row">
    <label class="font-weight-bold col-md-2">Gender</label>
    <div class="col-md-8">
        <select class="form-control" name="gender">
            <option value="<?= $result['gender'] ?>"><?= $result['gender'] ?></option>
            <?php if ($result['gender'] == 'Male') : ?>
                <option value="Female">Female</option>
            <?php else : ?>
                <option value="Male">Male</option>
            <?php endif; ?>
        </select>
    </div>
</div>