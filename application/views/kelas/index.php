<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder"><?= $judul; ?></h1>
            <p class="lead fw-normal text-white-50 mb-0">Pilih Kelas sesuai bidang yang kamu minati dan belajar bersama Mentor-mentor berpengalaman</p>
        </div>
    </div>
</header>
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php foreach ($produk as $prd) : ?>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?= base_url('assets/img/upload/') . $prd->image; ?>" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><?= $prd->nama_produk; ?></h5>
                                <!-- Mentor name -->
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">Rp 200.000</span>
                                <b><?= $prd->harga; ?></b>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                            <?= anchor('kelas/tambah_ke_keranjang/' . $prd->id_produk, '<div class="btn btn-sm btn-primary">Daftar Sekarang</div>') ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>