<?php if ($this->session->flashdata('notification')) : ?>

    <div id="demoNotify"><?php echo $this->session->flashdata('notification') ?></div>

    <div class="col-lg-4">
        <div class="bs-component">
            <div class="alert alert-dismissible alert-success">
                <button class="close" type="button" data-dismiss="alert">×</button><strong>Oh snap!</strong><a class="alert-link" href="#">Change a few things up</a> and try submitting again.
            </div>
        </div>
    </div>

<?php endif ?>