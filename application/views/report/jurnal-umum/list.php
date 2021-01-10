<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <center>
                <h2 class="text-secondary">Jurnal Umum</h2>
                <h4 class="text-secondary">SMAN 1 Binjai </h4>
                <h6 class="line-head text-secondary"><?= "Periode " . $_POST['start_date'] . " sampai " . $_POST['end_date']  ?></h6>
            </center>
            <div class="tile-body">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th>Reff</th>
                            <th>Debit</th>
                            <th>Kredit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $kredit = 0;
                        $debit  = 0;
                        foreach ($list as $item) :
                            echo "<tr>
                                    <td><span class='text-hide'>" . $item['no'] . "</span></td>";
                            if ($item['posisi'] == 'Debit') :
                        ?>
                                <td><?= $item['tanggal'] ?></td>
                                <td><?= $item['nama_akun'] ?></td>
                                <td><?= $item['kode_akun'] ?></td>
                                <td style="text-align: right;"><?= "Rp. " . number_format($item['total'], 2, ',', '.') ?></td>
                                <td> </td>
                            <?php $debit += $item['total'];
                            else : ?>
                                <td></td>
                                <td><?= $item['nama_akun'] ?></td>
                                <td><?= $item['kode_akun'] ?></td>
                                <td> </td>
                                <td style="text-align: right;"><?= "Rp. " . number_format($item['total'], 2, ',', '.') ?></td>
                        <?php $kredit += $item['total'];
                            endif;
                            echo "</tr>";
                        endforeach; ?>
                    </tbody>
                    <tr>
                        <td colspan="4" style="text-align: center; font-weight: bold;">Total</td>
                        <td style="text-align: right; font-weight: bold;"><?= "Rp. " . number_format($debit, 2, ',', '.') ?></td>
                        <td style="text-align: right; font-weight: bold;"><?= "Rp. " . number_format($kredit, 2, ',', '.') ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>