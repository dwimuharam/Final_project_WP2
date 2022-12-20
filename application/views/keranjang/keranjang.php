<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder"><?= $judul; ?></h1>
        </div>
    </div>
</header>
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>NO</th>
                    <th>Nama Kelas</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Sub-total</th>
                </tr>

                <?php
                $no = 1;
                foreach ($this->cart->contents() as $items) : ?>

                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $items['name'] ?></td>
                        <td><?= $items['qty'] ?></td>
                        <td align="right">Rp. <?= number_format($items['price'], 0, ',', '.') ?></td>
                        <td align="right">Rp. <?= number_format($items['subtotal'], 0, ',', '.') ?></td>
                    </tr>

                <?php endforeach; ?>
                <tr>
                    <td colspan="4"></td>
                    <td align="right">Rp. <?= number_format($this->cart->total(), 0, ',', '.'); ?></td>
                </tr>

            </table>
        </div>
        <div align="right">
            <a href="<?= base_url('kelas/hapus_keranjang'); ?>">
                <div class="btn btn-sm btn-danger">Hapus Keranjang</div>
            </a>
            <a href="<?= base_url('kelas/index'); ?>">
                <div class="btn btn-sm btn-primary">Lanjutkan</div>
            </a>
            <a href="<?= base_url('kelas/pembayaran'); ?>">
                <div class="btn btn-sm btn-success">Check Out</div>
            </a>
        </div>
    </div>
</section>