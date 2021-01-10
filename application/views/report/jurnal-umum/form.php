<div class="app-title">
    <div>
        <h1><i class="fab fa-magento"></i> <?= $submenu; ?></h1>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item">SMAN 1 Binjai </li>
        <li class="breadcrumb-item"><?= $menu; ?></li>
        <li class="breadcrumb-item active font-weight-bold"><a href="#"><?= $submenu; ?></a></li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <form action="<?= $url ?>" method="POST" class="row">
                    <div class="form-group col-md-3">
                        <label class="control-label font-weight-bold">Start Date</label>
                        <input class="form-control" name="start_date" type="date">
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label font-weight-bold">End Date</label>
                        <input class="form-control" name="end_date" type="date">
                    </div>
                    <div class="form-group col-md-4 align-self-end">
                        <button class="btn btn-info" type="submit">Find</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($list)) {
    $this->load->view('report/jurnal-umum/list');
} else {
    echo "<center><h5>Let's Find the General Journal</h5></center>";
}
?>