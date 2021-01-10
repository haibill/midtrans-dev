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
                    <div class="form-group col-md-2">
                        <label class="control-label font-weight-bold"> <b class="text-danger">*</b> Account</label>
                        <select class="form-control" id="demoSelect" name="akun">
                            <option selected="" disabled="">Choose a account</option>
                            <?php
                            foreach ($account as $item) {
                                echo "<option value = " . $item['kode_akun'] . ">" . $item['nama_akun'] . "</option>";
                            }
                            ?>
                        </select>
                        <?php echo form_error('akun'); ?>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="control-label font-weight-bold"> <b class="text-danger">*</b> Month</label>
                        <select class="form-control" name="bulan">
                            <option value="">Select Month</option>
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                        <?php echo form_error('bulan'); ?>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="control-label font-weight-bold"> <b class="text-danger">*</b> Year</label>
                        <select class="form-control" name="tahun">
                            <option selected="" disabled="">Select Year</option>
                            <?php
                            foreach ($year as $item) {
                                echo "<option value = " . $item['tahun'] . ">" . $item['tahun'] . "</option>";
                            }
                            ?>
                        </select>
                        <?php echo form_error('tahun'); ?>
                    </div>
                    <div class="form-group col-md-2 align-self-end">
                        <button class="btn btn-info" type="submit">Find</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($list)) {
    $this->load->view('report/buku-besar/list');
} else {
    echo "<center><h5>Let's Find the Ledger</h5></center>";
}
?>