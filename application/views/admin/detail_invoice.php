<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h2 class="mt-4 mb-3"><?= $judul; ?> <div class="btn btn-sm btn-success">No. Invoice <?= $invoice->id; ?></div>
            </h2>
            <div class="row">
                <div class="col-lg">
                    <table class="table table-bordered table-hover table-striped">
                        <tr>
                            <th>ID Kelas</th>
                            <th>Nama Kelas</th>
                            <th>Jumlah Pesanan</th>
                            <th>Harga Kelas</th>
                            <th>Sub-total</th>
                        </tr>

                        <?php
                        $total = 0;
                        foreach ($pesanan as $psn) :
                            $subtotal = $psn->jumlah * $psn->harga;
                            $total += $subtotal;
                        ?>
                            <tr>
                                <td><?= $psn->id_produk ?></td>
                                <td><?= $psn->nama_produk ?></td>
                                <td><?= $psn->jumlah ?></td>
                                <td><?= number_format($psn->harga, 0, ',', '.') ?></td>
                                <td><?= number_format($subtotal, 0, ',', '.') ?></td>
                            </tr>

                        <?php endforeach; ?>
                        <tr>
                            <td colspan="4" align="right"><b>Total</b></td>
                            <td align="right"><b>Rp. <?= number_format($total, 0, ',', '.') ?></b></td>
                        </tr>
                    </table>
                    <a href="<?= base_url('invoice'); ?>">
                        <div class="btn btn-sm btn-primary">Kembali</div>
                    </a>
                </div>
            </div>
    </main>