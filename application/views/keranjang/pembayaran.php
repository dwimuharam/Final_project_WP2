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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="btn btn-sm btn-success">
                    <?php
                    $grand_total = 0;
                    if ($keranjang = $this->cart->contents()) {
                        foreach ($keranjang as $item) {
                            $grand_total = $grand_total + $item['subtotal'];
                        }
                        echo "Total belanja anda: Rp " . number_format($grand_total, 0, ',', '.');
                    } ?>
                </div><br><br>
                <h3>Input Data Member</h3>
                <form method="post" action="<?= base_url("kelas/proses_pembayaran"); ?> ">
                    <div class="form-group mb-3">
                        <label>Nama Lengkap</label>
                        <input type="text" name="name" placeholder="Nama Lengkap" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label>No. HP</label>
                        <input type="text" name="no_hp" placeholder="No. HP" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label>Metode Pembayaran</label>
                        <select class="form-control">
                            <option>BCA - XXXXXX</option>
                            <option>BNI - XXXXXX</option>
                            <option>BRI - XXXXXX</option>
                            <option>MANDIRI - XXXXXX</option>
                            <option>INDOMARET/ALFAMART</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Daftar Kelas</button>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>