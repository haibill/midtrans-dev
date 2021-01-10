<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <center>
                <h2 class="text-secondary">Buku Besar</h2>
                <h4 class="text-secondary">SMAN 1 Binjai </h4>
                <h6 class="line-head text-secondary"><?= "Periode bulan " . $_POST['bulan'] . " tahun " . $_POST['tahun']  ?></h6>
            </center>
            <div class="tile-body">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th>Reff</th>
                            <th>Debit</th>
                            <th>Kredit</th>
                            <th>Saldo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // $saldo_awal = $saldo ? $saldo['total'] : 0;
                        $saldo_awal = 0;
                        echo "  <tr>
                                <td>01-" . $_POST['bulan'] . "-" . $_POST['tahun'] . "</td>
                                <td>Saldo Awal</td>
                                <td style='text-align: center'>-</td>
                                <td style='text-align: right'>-</td>
                                <td style='text-align: right'>-</td>
                                <td style='text-align: right;' > Rp. " . number_format(abs($saldo_awal), 2, ',', '.') . "</td>
                            </tr>";

                        foreach ($list as $item) {
                            echo "
                        <tr>
                            <td>" . $item['tanggal'] . "</td>
                            <td>" . $item['nama_akun'] . "</td>";
                            if ($item['posisi'] == 'Debit') {
                                if ($akun['header_akun'] == 1 or $akun['header_akun'] == 5 or $akun['header_akun'] == 6 or $akun['kode_akun'] == '312') {
                                    $saldo_awal += $item['total'];
                                } else {
                                    $saldo_awal -= $item['total'];
                                }
                                echo "
                            <td style='text-align: center;'>" . $item['kode_akun'] . "</td>
                            <td style='text-align: right;'> Rp. " . number_format($item['total'], 2, ',', '.') . "</td>
                            <td style='text-align: right'>-</td>
                            <td style='text-align: right;' > Rp. " . number_format(abs($saldo_awal), 2, ',', '.') . "</td>";
                            } else {
                                if ($akun['header_akun'] == 2 or $akun['header_akun'] == 4 or $akun['kode_akun'] == '311') {
                                    $saldo_awal += $item['total'];
                                } else {
                                    $saldo_awal -= $item['total'];
                                }
                                echo "
                                <td style='text-align: center;'>" . $item['kode_akun'] . "</td>
                                <td style='text-align: right'>-</td>
                                <td style='color: red; text-align: right;' > Rp. " . number_format($item['total'], 2, ',', '.') . "</td>
                                <td style='text-align: right;' > Rp. " . number_format(abs($saldo_awal), 2, ',', '.') . "</td>
                            </tr>";
                            }
                        }
                        ?>
                    </tbody>
                    <tr>
                        <td colspan="5" style="text-align: center; font-weight: bold;">Total</td>
                        <td style="text-align: right; font-weight: bold;"><?= "Rp. " . number_format(abs($saldo_awal), 2, ',', '.') ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>